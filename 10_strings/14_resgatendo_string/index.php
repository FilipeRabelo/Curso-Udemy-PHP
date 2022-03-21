<?php

    echo "Com a funcao 
    substr,
    podemos resgatar apenas uma parte de string<hr>";
    echo "Ex: substr (str, inicio, fim) <hr>";

    $str = "Esta é a minha string";

    $minha = substr($str, 10, 5); // STRING PAI. INDICE INICIAL, COMPRIMENTO DA PALAVRA

    echo $minha;