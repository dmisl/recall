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

     public static function get(string|array $key, $subkey = null) : string|array
     {
          if(gettype($key) == 'string')
          {
               echo 'one returned';
               var_dump(self::getByKeys($key, $subkey));
               return self::getByKeys($key, $subkey);
          } else
          {
               $data = [];
               foreach ($key as $little_key) {
                    $data[] = self::getByKeys($little_key);
               }
               echo 'many returned';
               var_dump($data);
          }
          return '';
     }

     private static function getByKeys(string|array $key, $subkey = null) : string
     {
          if(str_contains($key, '.'))
          {
               [$key, $subkey] = explode('.', $key);
          }
          if(isset(self::$config[$key]) && isset(self::$config[$key][$subkey]))
          {
               return self::$config[$key][$subkey];
          } else
          {
               throw new Exception('bruh you`re looking for something non existing');
          }
     }

}