<?php

    echo "Funcao array_reduce tm como objetivo reduzir um array em  apenas um valor,<br>
    Podemos passar uma segunda funcao como parametro, para algum processo ser executado<br>
    array_reduce($ arr, $ funcao)<hr>";

    $arr = [1,2,3,4,5,11,22,66,55,];

    function soma ($a, $b){

        return $a + $b;

    }

    $resultado = array_reduce($arr, "soma");

    echo "$resultado <br>";
    echo "<hr>";




    function subtracao($a, $b){
        return $a - $b;
    }

    $resultado2 = array_reduce($arr, "subtracao");

    echo "$resultado2 <br>";





?>