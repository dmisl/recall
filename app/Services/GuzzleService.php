<?php

namespace App\Services;

use GuzzleHttp\Client;

class GuzzleService
{
     private $guzzle;

     public function __construct()
     {
          $this->guzzle = new Client();
     }

     public function request(string $method, string $uri)
     {
          $this->guzzle->request($method, $uri);
     }
}