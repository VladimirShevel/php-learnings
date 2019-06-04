<?php
use App\Core\App;
require 'functions.php';

class ProductController
{
    public function new_product()
    {
        $product = Product::store_new_product();
        header('Location: edit_product?id='.$product->getProductid());
    }

    public function update_product()
    {
        if (isset($_POST['productid'])) {
            $product = Product::get_product_by_form_data($_POST);
            $product->update_product();
            header('Location: edit_product?id='.$product->getProductid());
        }
    }

    public function delete_product()
    {
        $query = "delete from product where productid = {$_GET['id']}";
        App::get('database')->delete($query);
        header('Location: /');
    }

    public function addAttribute()
    {
        if (isset($_POST["id"])) {
            $productID = $_POST["id"];
            $productAttributes = App::get('database')->selectAttributes($productID, 'Attribut');

            $atrNumber = count($productAttributes) + 1;

            foreach ($productAttributes as $attribute) {
                if ($attribute->code === null) {
                    $atrNumber--;
                    break;
                }
                $productAttribNames[] = $attribute->attribName;
            }
            $allAttributesNames = APP::get('database')->selectColumn('attribute', 'attribName');
            $allAttributesNames = ($productAttribNames) ? array_diff($allAttributesNames, $productAttribNames) : $allAttributesNames;

            foreach ($allAttributesNames as $attribName) {
                $selectAtribute[$attribName] = Attribut::attributeValuesByName($attribName);
            }

            $html = '<select id="nextAttribName" name = "attribName' . +($atrNumber) . '"><option>Chose Attribute</option>';
            foreach ($allAttributesNames as $name) {
                $html .= '<option>' . $name . '</option>';
            }
            $html .= '</select>';
            $data["nextAtr"] = $atrNumber;
            $data["text"] = $html;
            $data["json"] = $selectAtribute;
            echo json_encode($data, JSON_UNESCAPED_SLASHES);
        }
    }

    public function deleteAttribute()
    {
        Product_attribute::deleteProductAttribut($_GET['id'], $_GET['attribut']);
        header('Location: edit_product?id='.$_GET['id']);
    }

}