<?php
use App\Core\App;
include 'functions.php';

    if (isset($_POST['submit']))
    {
        $productName = $_POST['productName'];
        $productDescription = $_POST['productDescription'];
        $productPrice = getFloat($_POST['productPrice']);

        App::get('database')->insert('product', [
            'productName' => $productName,
            'productDescription' => $productDescription,
            'productPrice' => $productPrice
            ]);

        header('Location: /');
    }