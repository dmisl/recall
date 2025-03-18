<?php

namespace App\Core;

use PDO;

class Database
{
     private static $instance = null;
     private static $connection;

     private function __construct()
     {
          [$driver, $name, $host, $user, $password] = Config::get(['db.driver', 'db.name', 'db.host', 'db.user', 'db.password']);
          self::$connection = new PDO("$driver:host=$host;dbname=$name", $user, $password);
     }

     /**
      * Method returns current connection to the database
      * 
      * @return PDO connection to the database through PDO
      */
     public static function getConnection()
     {
          if(self::$instance === null)
          {
               self::$instance = new self();
          }
          return self::$connection;
     }
}