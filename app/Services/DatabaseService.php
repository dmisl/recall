<?php

namespace App\Services;

use App\Core\Database;

class DatabaseService
{
     private static $connection = null;

     public static function query()
     {
          self::$connection = Database::getConnection();
     }
}