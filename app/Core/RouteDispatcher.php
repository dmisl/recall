<?php

namespace App\Core;

class RouteDispatcher
{
     public static function dispatch() : void
     {
          $request = str_replace('recall/', '', $_SERVER['REQUEST_URI']);
          $method = $_SERVER['REQUEST_METHOD'];

          $routes = Route::getRoutes();
          if(isset($routes[$method][$request]))
          {
               echo 'all good, we`re ready to call some methods, yeah boys';
          } else
          {
               echo "something went wrong";
          }
     }
}