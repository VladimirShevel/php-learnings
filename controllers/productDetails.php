<?php
include 'functions.php';

if (isset($_GET['id'])){
$product = getProductFromDB($_GET['id']);
require 'views/productDetails.view.php';
}
