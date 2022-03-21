<?php

    echo "Podemos alterar o case apenas das palavras com funcoes de php<br>
    - ucfirst - primeira letra da string em maiúscula; <br>
    - ucwords - primeira letra de cada palavra da string em maiúscula.
    <hr>";


    $str = "meu carro corre muito! <br>";

    echo ucfirst($str);

    $str2 = "meu carro nao corre muito! <br>";

    echo ucwords($str2);