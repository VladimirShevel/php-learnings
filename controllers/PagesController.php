<?php

use App\Core\App;

class PagesController

{
    public function index()
    {
        function get_db_results()
        {
            $data = (App::get('database')->selectAll('product', 'Product'));
            SmartyPaginate::setTotal(count($data));
            return App::get('database')->selectAllLimit ('product', SmartyPaginate::getCurrentIndex(), SmartyPaginate::getLimit(), 'Product');
        }

        session_start();

        $smarty = new Smarty();

        SmartyPaginate::connect();
        SmartyPaginate::setUrl('/');
        SmartyPaginate::setLimit(10);
        $smarty->assign('results', get_db_results());
        SmartyPaginate::assign($smarty);
        $smarty->display('views/templates/index.tpl');


    }

    public function productCard()
    {
        $smarty = new Smarty();
        $smarty->assign('product', Product::get_product_by_id($_GET['id']));
        $smarty->display('views/templates/product_card.tpl');
    }


    public function edit_product()
    {
        $product = Product::get_product_by_id($_GET['id']);
        $smarty = new Smarty();
        $smarty->assign('product', $product);
        $smarty->assign('productAttribAllValues',Product_attribute::ProductAttribAllValues($product));
        $smarty->display('views/templates/edit_product.tpl');
    }



}