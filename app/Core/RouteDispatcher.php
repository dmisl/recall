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
               $controllerPath = $routes[$method][$request]['controller'];
               $method = $routes[$method][$request]['method'];
               $controller = new $controllerPath;
               call_user_func([$controller, $method]);
          } else
          {
               echo "something went wrong";
          }
     }
}