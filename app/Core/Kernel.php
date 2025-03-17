<?php

namespace App\Core;

class Kernel
{
     public static function handle()
     {
          RouteDispatcher::dispatch();
     }
}