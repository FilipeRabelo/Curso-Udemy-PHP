<?php

    echo "Funcao in_array VERIFICA se um intem passado esta no array;<br>
    o retorno é true se encontrado e fasle se nao encontrado,<br>
    Passamos dois argumentos para a funcao: in_array('item', $ arr)<hr>";

    
    $arr = ["banana", "maça", "batata", "perâ", "mamão"];

    if(in_array("batata", $arr)){
        echo "Ha o item batata no Array";
    }else{
        echo "nao ha batata no array";
    }

    echo "<hr>";

    $b = "banana";

    if(in_array($b, $arr)){
        echo "Ha o item $b no array";
    }else{
        echo "nao ha o item $b no array";
    }

?>