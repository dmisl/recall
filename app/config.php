<?php

return [
     'app' => [
          'name' => 'PHP Recall',
          'debug' => true,
          'timezone' => 'Europe/Warsaw',
     ],
     'db' => [
          'driver' => 'mysql',
          'name' => 'recall',
          'host' => 'localhost',
          'user' => 'root',
          'password' => '',
          'charset' => 'utf8',
          'sqlite_path' => __DIR__ . '/db/database.sqlite',
     ]
];