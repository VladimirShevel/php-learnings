<?php
use App\Core\App;

deleteAtr($_GET['id'], $_GET['attribut']);
$product = getProductFromDB($_GET['id']);
$productAttribAllValues = getProductAttribAllValues($product);
require 'views/editProduct.view.php';


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


//---------------------------------------------------------------------------------------------------------------------

function deleteAtr($productId, $attributeCode)
{
    $sql = 'DELETE FROM product_attribute WHERE productid='.$productId.' AND attributeid='.$attributeCode;

    App::get('database')->deleteProductAttribute($sql);
}

//---------------------------------------------------------------------------------------------------------------------

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
