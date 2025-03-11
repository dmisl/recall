<?php

namespace App\Controller;

use App\Services\RedisService;

class HomeController {

     private $redisService;

     public function __construct(RedisService $redisService)
     {
          $this->redisService = $redisService;
     }

     public function index()
     {
          $this->redisService->set('name', 'Dmytro');
          echo $this->redisService->get('name');
          include '../resources/views/index.php';
     }

     public function store()
     {
          if(verifyToken($_POST['csrf_token']))
          {
               unset($_SESSION['csrf_token']);
               
               header('Location: http://127.0.0.1/recall/');
          } else
          {
               echo 'ure fucked up';
          }
     }
}