<?php
use App\Core\App;

class Product
{
    private $productid;
    private $productName;
    private $productDescription;
    private $productPrice;
    private $productAttrib = [];

    public static function get_product_by_form_data($data)
    {
        $instance = new self();
        $instance->fill_properties($data);
        return $instance;
    }

    public static function get_product_by_id($id)
    {
        $instance = new self();
        try
        {
            $data = get_object_vars(App::get('database')->selectRow('product', 'productid',  $id)[0]);
            $instance->fill_properties($data);
        }

        catch(Exception $e)
        {
            header('Location /');
        }

        $attributes = App::get('database')->selectAttributes($id, 'Attribut');

        if ($attributes[0]->code) {
            foreach ($attributes as $attribute)
                {
                    $instance -> setProductAttribute($attribute);
                }
            }
        return $instance;
    }

    private function fill_properties($data)
    {
        function text_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = addslashes($data);
            return $data;
        }

        function Getfloat($str)
        {
            if(strstr($str, ",")) {
                $str = str_replace(".", "", $str); // replace dots (thousand seps) with blancs
                $str = str_replace(",", ".", $str); // replace ',' with '.'
            }

            if(preg_match("#([0-9\.]+)#", $str, $match)) { // search for number that may contain '.'
                return floatval($match[0]);
            } else {
                return floatval($str); // take some last chances with floatval
            }
        }

        $flag = false;
        foreach ($data as $key => $value)
        {
            next($data);
            if ($key == 'productid') $this -> productid = $value;
            if ($key == 'productName') $this -> productName = (text_input($value));
            if ($key == 'productDescription') $this -> productDescription = (text_input($value));
            if ($key == 'productPrice') $this -> productPrice = (Getfloat($value));

            if ($key == '_ATTRIBUTES_') { $flag = true; }

            if ($flag)
            {
                $string = substr($key, 0, -1);
                if ($string == 'attribName')
                {
                    $attributes[$value] = current($data);
                }
            }


        }

        if ($attributes)
        {
            foreach ($attributes as $name => $value)
            {
                $this -> productAttrib[] = Attribut::getAttributeByNameValue($name, $value);
            }
        }
    }

    public function setProductAttribute($productAttrib)
    {
        $this -> productAttrib[] = $productAttrib;
    }

    public function update_product()
    {
        $sql = 'UPDATE product SET 
        productid = "'.$this -> productid.'", 
        productName = "'.$this -> productName.'", 
        productDescription = "'.$this -> productDescription.'", 
        productPrice = "'.$this -> productPrice.' "WHERE productid = "'.$this -> productid.'"';

        App::get('database')->update($sql);
        App::get('database')->clearAttributes($this -> productid);

        foreach ($this -> productAttrib as $atr)
        {
            if ($atr->code == null) continue;
            App::get('database')->insert('product_attribute', ['productid'=>$this -> productid, 'attributeid' => $atr->code]);
        }
    }

    public static function store_new_product(){
        App::get('database')->insert('product',['productName'=>null]);
        return App::get('database')->selectToClassBySQL('SELECT * FROM product ORDER BY productid DESC LIMIT 1', 'Product')[0];
    }

    //---------------------------Geters----------------------------------------

    public function getProductid()
    {
        return $this->productid;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getProductDescription()
    {
        return $this->productDescription;
    }

    public function getProductPrice()
    {
        return $this->productPrice;
    }

    public function getProductAttrib()
    {
        return $this->productAttrib;
    }

}

