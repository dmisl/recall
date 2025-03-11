<?php

namespace App\Controller;

class HomeController {
     public function index()
     {
          include '../resources/views/index.php';
     }
     public function store()
     {
          if(isset($_POST['csrf_token']) && $_SESSION['csrf_token'] == $_POST['csrf_token'])
          {
               unset($_SESSION['csrf_token']);
               header('Location: http://127.0.0.1/recall/');
          } else
          {
               echo 'ure fucked up';
          }
     }
}