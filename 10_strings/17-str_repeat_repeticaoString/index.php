<?php

    echo "Funcao str_repeat pod emos repetir n vezes uma determinada string<br>
    O primeiro argumento é a string e o segundo é o numero de vezes<hr>";


    $frase = "Eu sou programador backend <br>";

    echo str_repeat($frase, 2);

    $x = 0;
    $y = 31;

   if($x == 10 || $y > 32){
       echo str_repeat($frase, 20);
   }else{
       echo str_repeat($frase, 10);
   }