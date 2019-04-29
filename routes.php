<?php
use App\Core\Router;
$router->get('editAtr', 'controllers/editAttr.php');
$router->get('deleteProduct', 'controllers/deleteProduct.php');
$router->post('insertProd','controllers/insertNewProduct.php');
$router->get('addprod', 'views/newProduct.view.php');
$router->get('deleteAtr','controllers/deleteAttribute.php');
$router->get('','controllers/index.php');
$router->post('editproduct','controllers/editproduct.php');
$router->post('selectattribute','controllers/selectnewattribute.php');
$router->get('details','controllers/productDetails.php');
//var_dump($router->routes);
