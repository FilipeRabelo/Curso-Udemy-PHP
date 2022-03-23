<?php

    echo

    "asort / para ordem crescente pelo VALOR (VALUE) das chaves<br>
     arsort / decrescente
     ksort / para ordenar pelas CHAVES(KEY)
     krsort / 

    <hr>";
     

    $arr = [
        "Filipe" => 32,
        "Giulia" => 6,
        "Rafael" => 4,
        "Daniela" => 44
    ];

    asort($arr);
    print_r($arr);      // pelo valor;
    echo "<hr>";

    arsort($arr);
    print_r($arr);
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";



    /////////////////////////////////////////////////////////




    $arr2 = [
        "Filipe" => 32,
        "Giulia" => 6,
        "Rafael" => 4,
        "Daniela" => 44
    ];

    ksort($arr2);
    print_r($arr2);   // pela chave;
    echo "<hr>";

    krsort($arr2);
    print_r($arr2);
    echo "<hr>";
2
 





?>