<?php

use App\Controller\HomeController;
use App\Core\Router;

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->post('/', [HomeController::class, 'store']);
