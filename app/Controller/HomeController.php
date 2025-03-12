<?php

namespace App\Controller;

use App\Services\RedisService;

class HomeController {

     public function index()
     {
          $redisService = new RedisService();
          $redisService->set('name', 'Dmytro');
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