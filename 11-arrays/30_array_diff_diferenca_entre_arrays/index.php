<?php

    echo "Funcao array_diff podemos verificar qual a diferenca entre dois 
    ou mais arrays, 
    a funcao aceita um numero inderterminado de arrays<hr>";

    $arr1 = [1,2,3];
    $arr2 = [2,4,6];

    $arr_diff = array_diff($arr1, $arr2);
    print_r($arr_diff);
    echo "<br>";

?>