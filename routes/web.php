<?php

use App\Controller\HomeController;
use App\Core\Route;

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'store']);