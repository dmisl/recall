<?php

namespace App\Controller;

use App\Services\RedisService;
use GuzzleHttp\Client;

class HomeController {

     public function index()
     {
          // echo '<pre>';
          // $guzzle = new Client();
          // $promise = $guzzle->getAsync('https://jsonplaceholder.typicode.com/users/')
          //      ->then(function ($response) use ($guzzle) {
          //           $data = json_decode($response->getBody());
          //           foreach ($data as $user) {
          //                echo "Uzytkownik: $user->name <br>";
          //           }
          //           return 123;
          //      })
          //      ->then(function ($response) {
          //           var_dump($response);
          //      })
          //      ->wait();
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