<?php

    echo "Podemos converter um array para string com a funcao implode<br>
    passamos primeiro o separador com o argumanto <br>
    depois a string q vai ser convertida<hr>";

    $arr = [
        "carro",
        "moto",
        "barco",
        "aviao",
        "bicicleta"
    ];

    print_r($arr);
    echo "<hr>";
    var_dump($arr);

    echo "<hr>";

    $arr_string = implode(", ", $arr);
    
    echo $arr_string;

