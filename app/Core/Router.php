<?php

namespace App\Core;

class Router
{
     private array $routes = [];

     public function get(string $uri, array $controller)
     {
          $this->routes['GET'][$uri] = $controller;
     }

     public function post(string $uri, array $controller)
     {
          $this->routes['POST'][$uri] = $controller;
     }

     public function dispatch(string $requestUri, string $requestMethod)
     {
          if(isset($this->routes[$requestMethod][$requestUri]))
          {
               [$controller, $method] = $this->routes[$requestMethod][$requestUri];
               if(class_exists($controller) && method_exists($controller, $method))
               {
                    $instance = new $controller();
                    return call_user_func([$instance, $method]);
               }
          } else
          {
               http_response_code(404);
               return 'Page not found';
          }
     }
}

?>