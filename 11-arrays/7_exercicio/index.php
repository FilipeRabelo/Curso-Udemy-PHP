<?php

    $arr = [
        [1, 2, 3 ,4],
        ["Filipe", "Giulia", "Rafael", "Monica"],
        ["Aviao", 55, "carro", 6556]
    ];

    // Loop no array externo
    for($i = 0; $i < count($arr); $i++){

        // Imprimindo array
        echo "Imprimindo array externo: " . ($i + 1) . "<br>"; // Sinalizando qual array esta imprimindo

        // Imprimendo o array interno // Loop aninhado //
        for($j = 0; $j < count($arr[$i]); $j++){

            echo $arr[$i][$j] . "<br>";




        }      

    }