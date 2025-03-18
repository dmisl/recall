<?php

namespace App\Core;

use Exception;

class Config
{
     private static $config = null;

     /**
      * Method loads data from app/config.php at the start of application
      */
     public static function load() : void
     {
          self::$config = require __DIR__ . '/../config.php';
     }

     /**
      * Method gets data from existing configuration by entering parameters as keys to some conf data
      * @param string|array $key key(s and subkeys) to the config branch
      * @param string $subkey subkey of branch that user wants to get
      * 
      * @return string|array value(s) from configuration file
      *
      * @throws Exception if key or subkey doesnt exist 
      */
     public static function get(string|array $key, $subkey = null) : string|array
     {
          if(gettype($key) == 'string')
          {
               return self::getByKeys($key, $subkey);
          } else
          {
               $data = [];
               foreach ($key as $little_key) {
                    $data[] = self::getByKeys($little_key);
               }
               return $data;
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