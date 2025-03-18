<?php

namespace App\Core;

use Exception;

class Route
{
     private static array $routes = [];

     public static function get(string $route, array $controller) : void
     {
          [$controller, $method] = [$controller[0], $controller[1]];
          if(!isset(self::$routes['GET'][$route]) && class_exists($controller) && method_exists($controller, $method))
          {
               self::$routes['GET'][$route] = ["controller" => $controller, "method" => $method];
          } else
          {
               throw new Exception("get the hell out of there, its already exists");
          }
     }

     public static function post(string $route, array $controller) : void
     {
          [$controller, $method] = [$controller[0], $controller[1]];
          if(!isset(self::$routes['POST'][$route]) && class_exists($controller) && method_exists($controller, $method))
          {
               self::$routes['POST'][$route] = ["controller" => $controller, "method" => $method];
          } else
          {
               throw new Exception("get the hell out of there, its already exists");
          }
     }

     public static function getRoutes() : array
     {
          return self::$routes;
     }
}

?>