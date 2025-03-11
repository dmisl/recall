<?php

/**
 * Funkcja do generowania CSRF-tokenu
 * 
 * @return string zgenerowany token
 */
function generateToken()
{
     if(!isset($_SESSION['csrf_token']))
     {
          $csrf_token = bin2hex(random_bytes(32));
          $_SESSION['csrf_token'] = $csrf_token;
     }
     return $_SESSION['csrf_token'];
}

/**
 * Funkcja sprawdza prawidlowosc wyslanego tokenu przez formularz z zgenerowanym tokenem zapisanym w 
 *
 * @param int $token Sprawdzany token
 * @return bool true/false
 */
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