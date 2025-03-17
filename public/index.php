<?php

use App\Core\Kernel;

require_once '../vendor/autoload.php'; 
require_once '../app/helpers.php';
require_once '../routes/web.php';

session_start();

Kernel::handle();
