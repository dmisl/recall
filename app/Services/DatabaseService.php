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
          if(isset($data['password']))
          {
               $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          }
          $sql = "INSERT INTO $table ($columns) VALUES ($values)";
          $stmt = self::$connection->prepare($sql);
          $stmt->execute($data);

          return self::$connection->lastInsertId();
     }

     public static function findById($table, $id)
     {
          $stmt = self::$connection->prepare("SELECT * FROM $table WHERE id = :id LIMIT 1");
          $stmt->execute(['id' => $id]);
          $result = $stmt->fetch(PDO::FETCH_ASSOC);

          return $result;
     }

     public static function getUniqueRecords(string $table)
     {
          $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE WHERE TABLE_NAME = :table AND TABLE_SCHEMA = :dbname";
          $stmt = self::$connection->prepare($sql);
          $stmt->execute([
               'table' => $table,
               'dbname' => Config::get('db.name')
          ]);

          $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
          
          // deleting id element
          $result = array_values(array_filter($result, fn($value) => $value !== 'id'));
          
          return $result;
     }

     public static function exists(string $table, array $data) : bool
     {
          $wheres = [];
          $params = [];

          foreach ($data as $key => $value) {
               $wheres[] = "$key = :$key";
               $params["$key"] = $value;
          }

          $columns = $columns = implode(", ", array_keys($data));
          $whereString = implode(' OR ', $wheres);
          $sql = "SELECT $columns FROM $table WHERE $whereString";
          $stmt = self::$connection->prepare($sql);
          $stmt->execute($params);
          return (bool) count($stmt->fetchAll(PDO::FETCH_ASSOC));
     }

     public static function load()
     {
          self::$connection = Database::getConnection();
     }
}