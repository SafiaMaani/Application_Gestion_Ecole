<?php

require_once 'autoload.php';
require_once 'Controllers/HomeController.php';

$home = new HomeController();
$user = new ParentsController();


$pages = ['index', 'parents', 'students', 'admin', 'prof', '404', 'delete', 'updateParent'];

if (isset($_GET['url'])) {
    if (in_array($_GET['url'], $pages)) {
        $page = $_GET['url'];
        $home->index($page);
    }else{
        include 'views/Includes/404.php';
    }
}else{
    $home->index('index');
}
