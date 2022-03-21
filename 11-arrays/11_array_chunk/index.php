<?php


    echo "POdemos dividir um array grande.<br>
    passamos o array como argumento e tambem o numero de elementos q cada array DEVE TER<hr>";


    $arr = range(1, 20);

    print_r(array_chunk($arr,4));
    echo "<hr>";

    $arrays = array_chunk($arr, 10);

    print_r($arrays);
    echo "<hr>";

    print_r($arrays[0]);
    echo "<hr>";

    print_r($arrays[1]);
    echo "<hr>";
