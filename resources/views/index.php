<?php

require '../config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Knowledge review</title>
     <style>
          .element
          {
               width: 260px; 
               height: 40px; 
               background-color: aquamarine; 
               color: black; 
               display: flex; 
               justify-content: center; 
               align-items: center; 
               text-align: center;
               font-size: 20px;
               text-decoration: none;
               border-radius: 10px;
          }
     </style>
</head>
<body style="margin: 0;">
     <div style="width: 100%; height: 100vh; display: flex; flex-direction: column; align-items: center; background-image: url('/images/cool_image.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
          <div style="width: 100%; background-color: #66d6fe; height: 70px; display: flex; justify-content: center; align-items: center; text-align: center;">
               <p style="font-size: 40px;">Sup mane, what you want to know 'bout PHP?</p>
          </div>
          <div style="width: 1000px; height: 100%; display: flex; justify-content: center; align-items: center; background-color: rgba(255, 145, 233, 0.148);">
               <div style="width: 900px; position: relative; top: -100px; display: flex; justify-content: space-between; flex-wrap: wrap; align-items: center;">
                    <a href="typy_danych.php" class="element">Typy danych</a>
                    <a href="index.php" class="element">Log in</a>
                    <a href="index.php" class="element">Poligon</a>
               </div>
          </div>
     </div>
</body>
</html>