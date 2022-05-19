<?php

require_once 'autoload.php';
require_once 'Controllers/HomeController.php';

$home = new HomeController();
$parent = new ParentsController();
$proffesseur = new ProfController();


$pages = [
    'index',
    'dashbord',
    'students',
    'prof',
    'parents',
    'admin',
    'settings',
    '404',
    'deleteParent',
    'updateParent',
    'deleteProf',
    'updateProf',
    'deleteStud',
    'updateStud'
];

if (isset($_GET['url'])) {
    if (in_array($_GET['url'], $pages)) {
        $page = $_GET['url'];
        $home->index($page);
    } else {
        include 'views/Includes/404.php';
    }
} else {
    $home->index('index');
}
