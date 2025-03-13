<?php

require_once '../vendor/autoload.php'; 
require_once '../app/helpers.php';
require_once '../routes/web.php';

$request = str_replace('recall/', '', $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];

session_start();
echo '<pre>';
$pdo = new PDO('mysql:host=localhost;dbname=english', 'root', '');

$stmt = $pdo->prepare('SELECT * FROM users');
$stmt->execute();

var_dump($stmt->fetch());

$router->dispatch($request, $method);