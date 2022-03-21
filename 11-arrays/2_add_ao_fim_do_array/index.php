<?php

    echo "Podemos add um valor ao fim de um array utilizando a atribuicao sem determinar um indice<br>
    Entao o valor atribuido sera enviado para o ultimo e novo indice do array;<br>";

    echo "Exemplo => $ arr[] = 5 <hr>";

    $arr = [1,2,3,4];

    $arr[] = 5;

    print_r($arr);