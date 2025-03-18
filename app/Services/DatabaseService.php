<?php

namespace App\Services;

use App\Core\Config;
use App\Core\Database;
use PDO;

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

     public static function getUniqueRecords(string $table)
     {
          $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE WHERE TABLE_NAME = :table AND TABLE_SCHEMA = :dbname";
          $stmt = self::$connection->prepare($sql);
          $stmt->execute([
               'table' => $table,
               'dbname' => Config::get('db.name')
          ]);
          return $stmt->fetchAll(PDO::FETCH_COLUMN);
     }

     // private static function exists(string $table, array $data)
     // {
     //      $sql = "SELECT 1 FROM $table WHERE $column = ";
     // }

     public static function load()
     {
          self::$connection = Database::getConnection();
     }
}