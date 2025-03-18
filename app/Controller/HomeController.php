<?php

namespace App\Controller;

use App\Core\Database;
use App\Model\User;
use App\Services\DatabaseService;

class HomeController {

     public function index()
     {
          User::create([
               'name' => 'Dmytro Slutyi',
               'email' => 'fdmisl07@gmail.com',
               'password' => '098spa',
          ]);
          include '../resources/views/index.php';
     }

     public function store()
     {
          if(verifyToken($_POST['csrf_token']))
          {
               unset($_SESSION['csrf_token']);
               
               header('Location: http://127.0.0.1/recall/');
               exit;
          } else
          {
               echo 'ure fucked up';
          }
     }
}