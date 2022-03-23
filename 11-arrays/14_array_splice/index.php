<?php

    echo "Podemos remover elementos de array com a funcao array_splice.<br>
    passamos como parametro o array, indice inicial e qntos elementos queremos remover;<br>
    Ex: array_splice($ arr,2,1) => A partir do indice 2, remove 1 elemento!<hr>";

    // RESGATAR ELEMENTOS DE ARRAY
    // REMOVER ELEMENTOS//  

    $arr = [1,2,3,"Filipe",5,6];

    $removidos = array_splice($arr, 1, 2);

    print_r($arr);
    echo "<br>";

    print_r($removidos);
    echo "<hr>";

    $arr_2 = [1,2,3,4,5,6,];

    $removidos_2 = array_splice($arr_2, 3);

    print_r($arr_2);
    echo "<br>";

    print_r($removidos_2);
    



