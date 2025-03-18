<?php

namespace App\Core;

use App\Services\DatabaseService;

class Kernel
{
     public static function handle() : void
     { 
          Config::load();
          DatabaseService::load();
          RouteDispatcher::dispatch();
     }
}