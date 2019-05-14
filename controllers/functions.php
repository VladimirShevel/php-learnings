<?php
use App\Core\App;
//-----------------------------Functions----------------------------------------
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
//------------------------------------------------------------------------------

function text_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = addslashes($data);
    return $data;
}

//------------------------------------------------------------------------------

function getProductFromEditForm($data)
{
    $product = new Product();
    $flag = false;
    foreach ($data as $key => $value)
    {
        next($data);
        if ($key == 'productid') $product->setProductId($value);
        if ($key == 'name') $product->setProductName(text_input($value));
        if ($key == 'description') $product->setProductDescription(text_input($value));
        if ($key == 'price') $product->setProductPrice(Getfloat($value));

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
            $product->setProductAttribute(Attribut::getAttributeByNameValue($name, $value));
        }
    }
    return $product;
}

//-------------------------------------------------------------------------------------------------------------

function updateProduct($product)
{
    $sql = 'UPDATE product SET 
        productid = "'.$product->getProductid().'", 
        productName = "'.$product->getProductName().'", 
        productDescription = "'.$product->getProductDescription().'", 
        productPrice = "'.$product->getProductPrice().' "WHERE productid = "'.$product->getProductid().'"';

    App::get('database')->update($sql);
    App::get('database')->clearAttributes($product->getProductid());


    foreach ($product->getProductAttrib() as $atr)
    {
        if ($atr->code == null) continue;
        App::get('database')->insert('product_attribute', ['productid'=>$product->getProductid(), 'attributeid' => $atr->code]);
    }
}

//---------------------------------------------------------------------------------------------------------------

function getProductFromDB($id)
{
    $productid = $id;

    try
    {
        $product = (App::get('database')->selectAllWhere('product', 'productid',  $productid , 'Product'))[0];
    }

    catch(Exception $e)
    {
        header('Location /');
    }

    $productAttributes = App::get('database')->selectAttributes($product->getProductid(), 'Attribut');

    foreach ($productAttributes as $attribute){
        if ($attribute->code===null) break;
        $product->setProductAttribute($attribute);
    }

    return $product;
}

//---------------------------------------------------------------------------------------------------------------
function getProductAttribAllValues($product)
{

    $productAttributes = App::get('database')->selectAttributes($product->getProductid(), 'Attribut');

    if($product->productAttrib) {
        foreach ($productAttributes as $attribute)
        {
            $productAttribNames[] = $attribute->attribName;
        }
        foreach ($productAttribNames as $attribName)
        {
            $productAttribAllValues[$attribName] = Attribut::attributeValuesByName($attribName);
        }
    }
    return $productAttribAllValues;
}

//----------------------------------------------------------------------------------------------------------------

function deleteAtr($prId, $atrId)
{
    $sql = "DELETE FROM product_attribute WHERE productid = {$prId} AND attributeid={$atrId}";
    App::get('database')->deleteProductAttribute($sql);
}