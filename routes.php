<?php
$router->get('deleteProduct', 'ProductController@delete_product');
$router->post('update_product','ProductController@update_product');
$router->get('new_product', 'ProductController@new_product');
$router->get('deleteAtr','ProductController@deleteAttribute');
$router->get('','PagesController@index');
$router->get('details','PagesController@productCard');
$router->get('edit_product','PagesController@edit_product');
$router->post('selectattribute','ProductController@addAttribute');

