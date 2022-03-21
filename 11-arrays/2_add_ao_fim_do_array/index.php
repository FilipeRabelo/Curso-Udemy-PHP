<?php

    echo "Podemos add um valor ao fim de um array utilizando a atribuicao sem determinar um indice<br>
    Entao o valor atribuido sera enviado para o ultimo e novo indice do array;<br>";

    echo "Exemplo => $ arr[] = 5 <hr>";

    $arr = [1,2,3,4];

    $arr[] = 5;

    print_r($arr);
    echo "<br>";

    $arr[] = 6;
    print_r($arr);

    echo "<hr>";

    $arr_1 = [];

    $arr_1["teste"] = "testando";
    
    print_r($arr_1);

    echo "<br>";

    $arr_1["teste"] = "novoteste1";
    print_r($arr_1);

    echo "<br>";

    $arr_1["testando"] = "novoteste2";
    print_r($arr_1);

    