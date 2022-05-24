<?php

require_once 'autoload.php';

$home = new HomeController();

$pages = [
    'index',
    'dashboard',
    'students',
    'prof',
    'parents',
    'admin',
    'settings',
    'deleteParent',
    'updateParent',
    'deleteProf',
    'updateProf',
    'deleteStud',
    'updateStud',
    'Login'
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
