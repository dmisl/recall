<?php

namespace App\Core;

use App\Services\DatabaseService;

abstract class Model
{
     protected static $table;
     protected static $unique_columns;
     protected static $instance = null;

     public static function create(array $parameters) : static
     {
          self::checkInstance();
          // DatabaseService::insert(self::$table, $parameters);
          return self::$instance;
     }

     private static function checkInstance()
     {
          if(self::$instance === null)
          {
               self::$instance = new static();
               self::$table = strtolower((new \ReflectionClass(static::class))->getShortName()).'s';
               var_dump(DatabaseService::getUniqueRecords(self::$table));
          }
     }

}