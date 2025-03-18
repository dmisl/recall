<?php

namespace App\Core;

use PDO;

class Database
{
     private static $instance = null;
     private static $connection;

     private function __construct()
     {
          Config::get('db.name');
          // self::$connection = new PDO("");
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