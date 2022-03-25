<?php

    echo "Datas q forem criadas com o objeto de DateTima podem ser comparadas
    utilizando os operadores de comparacao<br>

    Operadores como: >, < ou == <br>

    Utilizar o IF(){}; <br> 

    Ex: $ data_a > $ data_b;<hr>";

    $data_a = new DateTime();

    $data_b = new DateTime();

    $data_b->setDate(02,01,2022);

    if($data_a > $data_b){
        echo "Data a maior que Data b";
    }else{
        echo "Data b maior que Data a";
    }

    echo "<hr>";

    if($data_a < $data_b){
        echo "Data a maior que Data b";
    }else{
        echo "Data b maior que Data a";
    }

    
    