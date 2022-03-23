<?php

    echo "Funcao (extract) podemos criar variaveis rapidamente de (arrys associativos); o nome da chave sera o nome da variavel
    <br> se hou ver uma variavel ja criada com o nome da chave , a mesma sera sobrescrita<hr>";


    $arr = [
        "cor" => "vermelho",
        "forma" => "retangular",
        "material" => "aço"
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    echo "<hr>";


    ///////////////////////


    $nome = "Filipe";
    $idade = 100;

    $pessoa = [
        "nome" => "João",
        "idade" => 32
    ];

    echo $nome . "<br>";
    echo $idade . "<br>";

    echo "<hr>";

    extract($pessoa);

    echo "$nome <br>";
    echo "$idade <br>";

