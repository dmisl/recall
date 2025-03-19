<?php

namespace App\Core;

use App\Services\DatabaseService;
use Exception;

abstract class Model
{
     protected static $table;
     protected static $unique_columns;
     protected static $instance = null;
     protected array $attributes = [];

     protected function __construct(array $data = [])
     {
          $this->fill($data);
     }

     protected function fill(array $data)
     {
          foreach ($data as $key => $value) {
               $this->attributes[$key] = $value;
          }
     }

     public function __get($key)
     {
          return $this->attributes[$key] ?? null;
     }

     public static function find($id)
     {
          self::checkInstance();
          $result = DatabaseService::findById(self::$table, $id);
          
          return new static($result);
     }

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

     protected static function checkInstance()
     {
          if(self::$instance === null)
          {
               self::$instance = new static();
               self::$table = strtolower((new \ReflectionClass(static::class))->getShortName()).'s';
               self::$unique_columns = DatabaseService::getUniqueRecords(self::$table);
          }
     }

}