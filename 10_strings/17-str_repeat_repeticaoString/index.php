<?php

    echo "Funcao str_repeat pod emos repetir n vezes uma determinada string<br>
    O primeiro argumento é a string e o segundo é o numero de vezes<hr>";


    $frase = "Eu sou programador backend <br>";

    $string_repetida=  str_repeat($frase, 25);

    echo $string_repetida;

//     $x = 0;
//     $y = 31;

//    if($x == 10 || $y > 32){
//        echo str_repeat($frase, 20);
//    }else{
//        echo str_repeat($frase, 10);
//    }