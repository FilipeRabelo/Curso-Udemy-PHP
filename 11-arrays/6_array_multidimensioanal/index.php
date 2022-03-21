<?php

    echo "Quando inserimos arrays dentro de arrays formamos um array multidimensional
        tambem conhecidos como matriz<br>
        Para acessar esse tipo de array tambem utilizamos indices, 
        acessando o externo e dpois o interno.<br>
        exemlpo: $ arr[1][0] => primeiro elemento do segndo array<hr>";

        $arr = [
            [1, "array0", 3],  // array [0] e seus elementos
            [2, 4, "array1"]   // array [1] e seus elementos
        ];

        print_r($arr);
        echo "<hr>";

        echo $arr[0][1]; //acessando primeiro array e segundo elemento//
        echo "<br>";
        echo $arr[1][2]; // acessando segundo array e 3 elemento//