<?php

namespace App\Core;

use PDO;

abstract class Model
{
     public static function find($id)
     {
          echo $id;
     }
}