<?php

    echo "funcao array_merge para unir arrays, podemos passar um nuemro inderterminado de arrys<hr>";

    $arr1 = [1,2,3];
    $arr2 = [10, 40, 512];
    $arr3 = [2, 44.5, 43.3];
    $arr4 = ["filipe", "giulia"];

    $arr_merge = array_merge($arr1, $arr2, $arr3 , $arr4);

    print_r($arr_merge);



?>