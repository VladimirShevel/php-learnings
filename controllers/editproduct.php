<?php
include 'functions.php';

if (isset($_POST['editProduct']))
{
    $product = getProductFromEditForm($_POST);
    updateProduct($product);
    $product = getProductFromDB($product->getProductid());
    $productAttribAllValues = getProductAttribAllValues($product);
     require 'views/editProduct.view.php';
}

if (isset($_POST['showProduct'])) {
   $product = getProductFromDB($_POST['productid']);
   $productAttribAllValues = getProductAttribAllValues($product);
   require 'views/editProduct.view.php';
}