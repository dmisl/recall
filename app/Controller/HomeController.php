<?php

namespace App\Controller;

use App\Services\RedisService;
use GuzzleHttp\Client;

class User 
{
     private string $name = "Default name";
     
     public function __construct(string $name)
     {
          $this->name = $name;
          echo $this->name;
     }

     public function __destruct()
     {
          echo "wassup guys I told you im not gay";
     }
}

class HomeController {

     public function index()
     {
          $user = new User("Dmytro");
          // include '../resources/views/index.php';
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