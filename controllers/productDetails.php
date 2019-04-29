<?php
use App\Core\App;
if (isset($_GET['id'])){
$product = getProductFromDB($_GET['id']);
require 'views/productDetails.view.php';
}

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


