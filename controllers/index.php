<?php

use App\Core\App;
//
//function test_text_input($data) {
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
//}
//
//function is_image(){
//    $image_tmp = $_FILES['fileup']['tmp_name'];
//    $fi = finfo_open(FILEINFO_MIME_TYPE);
//    $mime = (string)finfo_file($fi, $image_tmp);
//    if (strpos($mime, 'image') === false) {
//        echo('Можно загружать только изображения.');
//        return false;
//    }  else {
//        return true;
//    }
//}
//
//if (isset($_POST['submit'])) {
//    if (is_image()){
//        move_uploaded_file($_FILES['fileup']['tmp_name'],
//            "data/images/{$_FILES['fileup']['name']}");
//
//        $image = $_FILES['fileup']['name'];
//        $name = test_text_input($_POST['name']);
//        $surname = test_text_input($_POST['surname']);
//        $email = test_text_input($_POST['email']);
//        $message = test_text_input($_POST['message']);
//
//        App::get('database')->insert('customer', [
//            'name' => $name,
//            'surname' => $surname,
//            'email' => $email,
//            'photo' => $image,
//            'comment' => $_POST['message']
//        ]);
//
//        require 'sendmail.php';
//    }
//}







$limit = 5;
$totalpages = intval((count(App::get('database')->selectAll ('product', 'Product')) - 1) / $limit) + 1;


if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    // cast var as int
    $currentpage = (int) $_GET['page'];
} else {
    // default page num
    $currentpage = 1;
}

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
    // set current page to last page
    $currentpage = $totalpages;
}
// if current page is less than first page...
if ($currentpage < 1) {
    // set current page to first page
    $currentpage = 1;
} // end if

// the offset of the list, based on current page
$offset = (ceil($currentpage) - 1)*$limit;

$count_show_pages = 3;
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