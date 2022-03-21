<?php

    echo "Com a funcao strpos podemos encontrar algum texto na string<br>
    se reecebmeos algum valor é que o texto foi encontrado, e este valor é o indice inicial<br>
    se for retornado false, o texto nao esta na string<hr>";

    $str =  "Estamos testando o método strpos, com o strpos pódemos encontrar strings";

    $teste_encontrar = strpos($str,"strpos");

    echo $teste_encontrar . "<hr>";



    $teste_encontrar2 = strpos($str, "Java");

    echo $teste_encontrar2;

    if($teste_encontrar2 == false){
        echo "Palavra nao encontrada";
    }

    echo "<hr>";

    $palavra = "com";

    $teste_encontrar3 =  strpos($str, $palavra);

    echo $teste_encontrar3;

    echo "<hr>";

    $palavra2 = "to";

    $teste_encontrar4 = strpos($str, $palavra2);

    echo $teste_encontrar4;