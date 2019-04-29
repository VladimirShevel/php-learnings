<?php
use App\Core\App;


    if (isset($_POST['submit']))
    {
        $productName = $_POST['productName'];
        $productDescription = $_POST['productDescription'];
        $productPrice = $_POST['productPrice'];

        App::get('database')->insert('product', [
            'productName' => $productName,
            'productDescription' => $productDescription,
            'productPrice' => $productPrice
            ]);

        header('Location: /');
    }