<?php

namespace App\Core;

class Kernel
{
     public static function handle() : void
     { 
          Config::load();
          RouteDispatcher::dispatch();
     }
}