<?php

require_once '../vendor/autoload.php'; 
require_once '../app/helpers.php';

use App\Controller\HomeController;

$request = str_replace('recall/', '', $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];

session_start();

$homeController = new HomeController();

if($request == '/' && $method == 'GET')
{
    $homeController->index();
} else if($request == '/' && $method == 'POST')
{
    $homeController->store();
}