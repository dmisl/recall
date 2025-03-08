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
          .content-element h1
          {
               font-size: 33px;
               margin-bottom: 5px;
          }
          .content-element h2
          {
               font-size: 29px;
               margin-bottom: 5px;
          }
          .content-element ul
          {
               margin-top: 10px;
          }
          .example
          {
               border-radius: 10px;
               overflow: hidden;
               margin: 20px 0;
          }
          .example .header
          {
               display: flex;
               background-color: rgb(62, 62, 73);
               justify-content: space-between;
               padding: 3px 30px;
               font-size: 15px;
               font-weight: 300;
          }
          .example .content
          {
               background-color: rgb(26, 26, 26);
               padding: 10px 30px;
               padding-bottom: 17px;
               font-family: 'Courier New', Courier, monospace !important;
               font-size: 17px;
               font-weight: 300;
               margin-bottom: 20px;
          }
          .example .content *
          {
               font-family: 'Courier New', Courier, monospace !important;
               font-size: 17px;
               font-weight: 300;
          }
          .example .var
          {
               color: rgb(240, 65, 202);
          }
          .example .com
          {
               color: lightgray;
          }
          .example .func
          {
               color: red;
          }
          .example .str
          {
               color: rgb(0, 172, 63);
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

          <div class="content-element">
               <h1>1. Typy skalarne (prymitywne)</h1>
               <p>Typy skalarne to najprostsze typy, ktore przechowuja jedna wartosc</p>

               <h2 style="margin-top: 15px;">1.1 Integer (liczby calkowite)</h2>
               <ul>
                    <li>Reprezentuje liczby calkowite (dodatnie, ujemne, zero).</li>
                    <li>Domyslnie zapisuje wartosci w systemie dzisietnym. Mozna uzywac rowniez systemu osemkowego (0o), szesnastkowego (0x) i binarnego (0b).</li>
                    <li>Wartosc maksymalna zalezy od systemu (32-bit lub 64-bit).</li>
               </ul>
               <div class="example">
                    <div class="header">
                         <p>php</p>
                         <p>copy</p>
                    </div>
                    <div class="content">
                         <span class="var">$liczba</span> = <span class="var">42</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="com">// Dziesietny</span><br>
                         <span class="var">$bin</span> = <span class="var">0b1010;</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="com">// Binarny (10)</span><br>
                         <span class="var">$oct</span> = <span class="var">0o77;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="com">// Osemkowy (63)</span><br>
                         <span class="var">$hex</span> = <span class="var">0x1A;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="com">// Szesnastkowy (26)</span><br>
                         <br>
                         <span class="func">var_dump</span>(<span class="var">$liczba</span>, <span class="var">$bin</span>, <span class="var">$oct</span>, <span class="var">$hex</span>);
                    </div>
               </div>
          </div>
          
          <div class="content-element">
               <h2>1.2 Float (liczby zmiennoprzecinkowe)</h2>
               <ul>
                    <li>Reprezentuje liczby rzeczywiste (dziesietne)</li>
                    <li>Wartosc maksymalna zalezy od systemu (zazwyczaj 1.8e308 dla 64-bit)</li>
               </ul>
               <div class="example">
                    <div class="header">
                         <p>php</p>
                         <p>copy</p>
                    </div>
                    <div class="content">
                         <span class="var">$float1</span> = <span class="var">3.14</span>;<br>
                         <span class="var">$float2</span> = <span class="var">2.5e3</span>;&nbsp;&nbsp;<span class="com">// 2500 (notacja naukowa)</span><br>
                         <span class="var">$float3</span> = <span class="var">5E-2</span>;&nbsp;&nbsp;&nbsp;<span class="com">// 0.05</span><br>
                         <br>
                         <span class="func">var_dump</span>(<span class="var">$float1</span>, <span class="var">$float2</span>, <span class="var">$float3</span>);
                    </div>
                    <p>Funkcje pomocnicze:</p>
                    <div class="example" style="margin-bottom: 0;">
                         <div class="header">
                              <p>php</p>
                              <p>copy</p>
                         </div>
                         <div class="content">
                              <span class="func">is_float</span>(<span class="var">$float1</span>);&nbsp;&nbsp;<span class="com">// true</span><br>
                              <span class="func">floatval</span>(<span class="str">"3.99"</span>);&nbsp;&nbsp;&nbsp;<span class="com">// 3.99</span>
                         </div>
                    </div>
               </div>
          </div>

          <div class="content-element">
               <h2>1.3 String (lancuchy znakow)</h2>
               <p>Ciag znakow zapisany w " " lub ''</p>

               <div class="example">
                    <div class="header">
                         <p>php</p>
                         <p>copy</p>
                    </div>
                    <div class="content">
                         <span class="var">$float1</span> = <span class="var">3.14</span>;<br>
                         <span class="var">$float2</span> = <span class="var">2.5e3</span>;&nbsp;&nbsp;<span class="com">// 2500 (notacja naukowa)</span><br>
                         <span class="var">$float3</span> = <span class="var">5E-2</span>;&nbsp;&nbsp;&nbsp;<span class="com">// 0.05</span><br>
                         <br>
                         <span class="func">var_dump</span>(<span class="var">$float1</span>, <span class="var">$float2</span>, <span class="var">$float3</span>);<br>
                    </div>
               </div>
          </div>

          <div class="content-element">
               <h2>1.4 Boolean (wartosci logiczne)</h2>
               <p>Moze przyjmowac <b>true</b> (prawda) lub <b>false</b> (falsz)</p>
               <p>Uzywany w warunkach i operacjach logicznych</p>

               <p><br>Konwersja na boolean</p>
               <div class="example">
                    <div class="header">
                         <p>php</p>
                         <p>copy</p>
                    </div>
                    <div class="content">
                         <span class="func">var_dump</span>((<span class="var">bool</span>) <span class="var">0</span>);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="com">// false</span> <br>
                         <span class="func">var_dump</span>((<span class="var">bool</span>) <span class="var">0.0</span>);&nbsp;&nbsp;&nbsp;<span class="com">// false</span> <br>
                         <span class="func">var_dump</span>((<span class="var">bool</span>) <span class="str">""</span>);&nbsp;&nbsp;&nbsp;&nbsp;<span class="com">// false</span> <br>
                         <span class="func">var_dump</span>((<span class="var">bool</span>) <span class="var">null</span>);&nbsp;&nbsp;<span class="com">// false</span> <br>
                         <span class="func">var_dump</span>((<span class="var">bool</span>) <span class="str">"0"</span>);&nbsp;&nbsp;&nbsp;<span class="com">// false</span> <br>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>