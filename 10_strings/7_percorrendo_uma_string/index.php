<?php

    echo "Podemos percorrer cada um dos caracteres de uma string <br>
    Para isso vamos utilizar uma estrutura de repeticao<br>
    E o metado strlen para saber o numero de caracteres atraves do $ i <hr>";

    $str = "Esta e uma string muito grande, ela tem varios caracteres";

    for($i = 0; $i < strlen($str); $i ++){

        echo "$str[$i] <br>";

    }