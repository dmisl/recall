<?php

namespace App\Services;

use App\Core\Database;

class DatabaseService
{
     private static $connection = null;

     private function __construct() {}

     public static function insert(string $table, array $data)
     {
          $columns = implode(", ", array_keys($data));
          $values = implode(", ", array_map(fn($key) => ":$key", array_keys($data)));
          $sql = "INSERT INTO $table ($columns) VALUES ($values)";
          $stmt = self::$connection->prepare($sql);
          $stmt->execute($data);

          return self::$connection->lastInsertId();
     }

     private static function exists(string $table, array $data)
     {
          $sql = "SELECT 1 FROM $table WHERE $column = ";
     }

     public static function load()
     {
          self::$connection = Database::getConnection();
     }
}