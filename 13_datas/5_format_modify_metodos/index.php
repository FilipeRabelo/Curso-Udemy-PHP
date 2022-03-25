<?php

    echo "Os metodos format e modify sao da classe DateTime e nos ajudam a manipular
    os dados nestes objetos<br>
    
    format --> Formata a data<br>
    modify --> Altera a data <hr>
    
    ";

    // data atual q foi instanciada
    $data_teste = new DateTime();

    echo $data_teste->format("d/m/y") . "<br>";

    echo $data_teste->format("D - M - Y") . "<br>";

    echo $data_teste->format("l - F - Y") . "<br>";


    //data modificada + 5
    $data_teste->modify("+5 days");

    echo $data_teste->format("d/m/Y") . "<br>";

    $data_teste->modify("+5 months");

    echo $data_teste->format("d/m/Y") . "<br>";

    $data_teste->modify("- 3 years");

    echo $data_teste->format("l / F / Y") . "<br>";
    echo $data_teste->format("d / m / Y") . "<br>";