<?php

    echo "Com a funcao strstr podemos encontrar um texto em uma string";

    echo "se ele encontrar a palavra em especifica ele retorna toda a string <hr>";

    $str = "Testando o resto da string pra ver se dar certo";

    $rest = strstr($str, "resto");
    echo $rest;