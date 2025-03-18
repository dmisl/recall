<?php

namespace App\Core;

abstract class Model
{

     public static function find($id)
     {
          echo $id;
     }
}