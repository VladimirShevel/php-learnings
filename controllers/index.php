<?php
use App\Core\App;

$limit = 5;
$totalpages = intval((count(App::get('database')->selectAll ('product', 'Product')) - 1) / $limit) + 1;

if (isset($_GET['page']) && is_numeric($_GET['page']))
{
    $currentpage = (int) $_GET['page'];
} else
    {
        $currentpage = 1;
    }

if ($currentpage > $totalpages)
{
    $currentpage = $totalpages;
}

if ($currentpage < 1)
{
    $currentpage = 1;
}

$offset = (ceil($currentpage) - 1)*$limit;

$count_show_pages = 5;
$url = "/";
$url_page = "/?page=";

if ($totalpages > 1)
    {
        $left = $currentpage - 1;
        $right = $totalpages - $currentpage;
        if ($left < floor($count_show_pages / 2)) $start = 1;
        else $start = $currentpage - floor($count_show_pages / 2);
        $end = $start + $count_show_pages - 1;
        if ($end > $totalpages)
        {
            $start -= ($end - $totalpages);
            $end = $totalpages;
            if ($start < 1) $start = 1;
        }
    }

$allProducts = App::get('database')->selectAllLimit ('product', $offset, $limit, 'Product');

require 'views/index.view.php';