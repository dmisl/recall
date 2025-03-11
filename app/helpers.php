<?php

function generateToken()
{
     if(!isset($_SESSION['csrf_token']))
     {
          $csrf_token = bin2hex(random_bytes(32));
          $_SESSION['csrf_token'] = $csrf_token;
     }
     return $_SESSION['csrf_token'];
}

function verifyToken($token)
{
     if(isset($_SESSION['csrf_token']) && $token == $_SESSION['csrf_token'])
     {
          return true;
     } else
     {
          return false;
     }
}