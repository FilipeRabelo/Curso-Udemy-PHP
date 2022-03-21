<?php

    echo "Podemos remover os espacos em branco de uma string com funcoes
    de php, desta forma conseguimos remover os espacos desnecessarios inseridos pelos
    usuarios...<hr>";

    $str1 = "            Filipe           ";

    echo "Esta é a string 1: $str1. <br>";

    $str1_limpa = trim($str1);

    echo "Esta é a string 1: $str1_limpa. <br>";

    echo "<hr>";

    
