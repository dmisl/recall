<?php

namespace App\Core;

use PDO;

class Database
{
     private static $instance = null;
     private static $connection;

     private function __construct()
     {
          $driver = Config::get(['db.name', 'db.driver', 'db.host']);
          // self::$connection = new PDO("{Config::get('')}");
     }

     public static function getConnection()
     {
          if(self::$instance === null)
          {
               self::$instance = new self();
          }
          return self::$connection;
     }
}