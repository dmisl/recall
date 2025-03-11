<?php

namespace App\Services;

use Predis\Client;

class RedisService
{
     private $redis;

     public function __construct()
     {
          $this->redis = new Client([
               'scheme' => 'tcp',
               'host' => '127.0.0.1',
               'port' => 6379,
          ]);
     }

     public function getRedis()
     {
          return $this->redis;
     }

     public function set($key, $value)
     {
          $this->redis->set($key, $value);
     }

     public function get($key)
     {
          return $this->redis->get($key);
     }
}