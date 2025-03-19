<?php

namespace App\Core;

use App\Services\DatabaseService;
use Exception;

abstract class Model
{
     protected static $table;
     protected static $unique_columns;
     protected array $attributes = [];

     protected function __construct(array $data = [])
     {
          $this->attributes = $data;
     }

     public function __get($key)
     {
          return $this->attributes[$key] ?? null;
     }

     public function __set($property, $value)
     {
          $this->attributes[$property] = $value;
     }

     public static function find($id)
     {
          static::checkInstance();

          $result = DatabaseService::findById(self::$table, $id);
          
          return new static($result);
     }

     public static function create(array $parameters) : static
     {
          static::checkInstance();

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
               return static::find(DatabaseService::insert(self::$table, $parameters));
          } else
          {
               // here we should realize redirect back with message
               // throw new Exception("Record with unique column already exists");
          }
          return new static();
     }

     public function update(array $data)
     {
          DatabaseService::update(static::$table, $this->id, $data);

          foreach ($data as $key => $value) {
               $this->attributes[$key] = $key != 'password' ? $value : password_hash($value, PASSWORD_DEFAULT);
          }

          return static::find($this->id);
     }

     public function delete()
     {
          DatabaseService::delete(static::$table, $this->id);
          return null;
     }

     protected static function checkInstance()
     {
          if(!isset(static::$table) && !isset(self::$unique_columns))
          {
               self::$table = strtolower((new \ReflectionClass(static::class))->getShortName()).'s';
               self::$unique_columns = DatabaseService::getUniqueRecords(self::$table);
          }
     }

}