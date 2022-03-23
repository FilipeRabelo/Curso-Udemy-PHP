<?php

    echo "array_reverse = passamos a penas o array como argumento
    o retorno sera o array invertido 
    nao altera a estrutura original mas sim o valor, entao precisamo colocar em nova variavel<hr>";

    $arr = [ 1,2,3,4,5,6,7];

    $arr_rev = array_reverse($arr);

    print_r($arr);

    echo "<hr>";

    print_r($arr_rev);


    echo "<hr>";

    $arr2 = ["Filipe", 2,1, [2, 2], true, "giulia"];

    $arr_rev2 = array_reverse($arr2);

    print_r($arr_rev2);



?>