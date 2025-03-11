<?php

require_once '../vendor/autoload.php'; 
require_once '../app/helpers.php';

use App\Controller\HomeController;

$request = $_SERVER['REQUEST_URI'];
$request = str_replace('recall/', '', $request);

session_start();

switch ($request) {
    case '/':
        $homeController = new HomeController();
        $homeController->index();
        break;

    default:
        echo "Page not found.";
        break;
}