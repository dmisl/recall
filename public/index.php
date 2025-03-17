<?php

echo '<pre>';

require_once '../vendor/autoload.php'; 
require_once '../app/helpers.php';
require_once '../routes/web.php';

$request = str_replace('recall/', '', $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];

session_start();
