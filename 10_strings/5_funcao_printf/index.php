<?php

    echo "Podemos imprimir valores de forma dinamica 
    utilizando o simbolo % <hr>";

    $nome = "Filipe";

    // %s = String

    printf("O nome é %s <br>", $nome );

    echo "<hr>";

    $n = 10;

    // %d = Numero Inteiro

    printf(" O numero %d e outro é  %d <br>", $n, 150);

    echo "<hr>";

    $temperatura = 12.58;

    printf("A Temperatura atual é %.2f <br>", $temperatura);