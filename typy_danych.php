<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Typy danych</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
     <style>
          *
          {
               font-family: 'Roboto';
               margin: 0;
               color: white;
          }
          body
          {
               background-color: rgb(38, 40, 49);
          }
          .content-element
          {
               padding: 25px 0;
               border-bottom: 2px solid rgb(195, 195, 195);
          }
          .content-element b
          {
               color: rgb(240, 65, 202);
               text-decoration: underline;
          }
     </style>
</head>
<body>
     <div style="width: 1000px; margin: 0 auto; font-size: 20px; font-weight: 500;">

          <div class="content-element">
               PHP to jezyk <b>dynamicznie typowany</b>, co oznacza ze zmienne <b>nie maja okreslonego typu podczas deklaracji</b>.<br>
               PHP automatycznie przypisuje typ zmienniej na podstawie wartosci przypisanej do niej
          </div>
          
          <div class="content-element">
               PHP posiada 8 podstawowych typow danych, ktore dziela sie na 3 kategorii:
               <div style="border: 1px solid rgb(195, 195, 195); display: flex; border-left: 0; margin-top: 10px; width: 100%; height: 50px;">
                    <div style="width: 33%; border-left: 1px solid rgb(195, 195, 195); height: 100%; display: flex; justify-content: center; align-items: center; font-size: 30px;">
                         Skalarne
                    </div>
                    <div style="width: 33%; border-left: 1px solid rgb(195, 195, 195); height: 100%; display: flex; justify-content: center; align-items: center; font-size: 30px;">
                         Zlozone
                    </div>
                    <div style="width: 33%; border-left: 1px solid rgb(195, 195, 195); height: 100%; display: flex; justify-content: center; align-items: center; font-size: 30px;">
                         Specjalne
                    </div>
               </div>
          </div>

     </div>
</body>
</html>