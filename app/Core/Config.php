<?php

namespace App\Core;

use Exception;

class Config
{
     private static $config = null;

     /**
      * Function loads data from app/config.php at the start of application
      */
     public static function load() : void
     {
          self::$config = require __DIR__ . '/../config.php';
     }

     public static function get(string $key, $value = null) : string
     {
          echo '<pre>';
          // var_dump(self::$config);
          if(str_contains($key, '.'))
          {
               [$key, $value] = explode('.', $key);
          }
          if(isset(self::$config[$key]) && isset(self::$config[$key][$value]))
          {
               echo 'hello';
          } else
          {
               throw new Exception('bruh you`re looking for something non existing');
          }
          return '';
     }

}