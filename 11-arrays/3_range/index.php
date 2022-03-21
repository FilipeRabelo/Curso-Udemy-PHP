<?php

    echo "podemos usar a funcao RANGE para criar um array 
    numerico rapidamente<br>
    Exemplo range(1,10)<hr>";

    $arr = range(1 ,10);
    print_r($arr);
    echo "<hr>";

    $arr_2 = range(5, 50);
    print_r($arr_2);
    echo "<hr>";

    $arr_3 = range(0, 1000, 100); // de 0 ate 1000 de 100/100 //
    print_r($arr_3);
    echo "<hr>";