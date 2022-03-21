<?php

    echo "Podemos obter o numero de elementos de um array com a funcao COUNT<br>
    Basta passar o array com ARGUMENTO, Uminteiro sera retornado<hr>";



    $arr =[1,2,3];

    echo count($arr) . "<hr>";

    for($i = 0; $i < count($arr); $i++){

        $soma = $arr[$i] + 10;

        echo $soma . "<br>";
    }