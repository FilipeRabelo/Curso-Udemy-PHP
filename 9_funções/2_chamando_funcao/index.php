<?php

    function soma($a, $b){

        echo $a + $b;

    }

    echo soma(2.545, 4.154) . "<br>";


    function soma2(){

        echo 4 + 2;

    }

    echo soma2() . "<br>";

    function soma3(){

        $a = 5;
        $b = 4;

        echo $a + $b . "<br>";

    }

    echo soma3();
    echo soma2();

    echo "<hr>";
    // FUNCAO DO PHP PARA DEIXAR AS LETRAS MAIUSCULAS //

    echo strtoupper("testando funÇÃo");
    echo "<hr>";

    //EXERCICIO//

    $arr = ["Filipe", "Giulia", "Rafael", "Daniela", "Monica"];

    $teste = implode(", ", $arr);  // IMPLODE junta um array em uma string (junta os valores)ç

    echo $teste;  //Atribuir o nome da função a uma variavel //
   