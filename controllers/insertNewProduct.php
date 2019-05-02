<?php
use App\Core\App;
include 'functions.php';

    if (isset($_POST['submit']))
    {
        $productName = text_input($_POST['productName']);
        $productDescription = text_input($_POST['productDescription']);
        $productPrice = getFloat($_POST['productPrice']);

        App::get('database')->insert('product', [
            'productName' => $productName,
            'productDescription' => $productDescription,
            'productPrice' => $productPrice
            ]);
        header('Location: /');
    }