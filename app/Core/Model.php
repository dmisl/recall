<?php

namespace App\Core;

use App\Services\DatabaseService;
use Exception;

abstract class Model
{
     protected static $table;
     protected static $unique_columns;
     protected static $instance = null;

     public static function create(array $parameters) : static
     {
          self::checkInstance();
          $column_data = [];
          foreach (self::$unique_columns as $unique_column) {
               foreach ($parameters as $column => $value) {
                    if($unique_column == $column)
                    {
                         $column_data[$column] = $value;
                    }
               }
          }
          if(!DatabaseService::exists(self::$table, $column_data))
          {
               DatabaseService::insert(self::$table, $parameters);
          } else
          {
               // here we should realize redirect back with message
               // throw new Exception("Record with unique column already exists");
          }
          return self::$instance;
     }

     private static function checkInstance()
     {
          if(self::$instance === null)
          {
               self::$instance = new static();
               self::$table = strtolower((new \ReflectionClass(static::class))->getShortName()).'s';
               self::$unique_columns = DatabaseService::getUniqueRecords(self::$table);
          }
     }

}