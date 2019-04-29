<?php
include 'functions.php';

deleteAtr($_GET['id'], $_GET['attribut']);
$product = getProductFromDB($_GET['id']);
$productAttribAllValues = getProductAttribAllValues($product);
require 'views/editProduct.view.php';