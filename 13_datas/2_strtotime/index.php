<?php

    echo "Funcao strtotime Recebe uma STRING como parametro, que é um texto sinalizando tempo;<br>
    A funcao tentar interpretar e transformar em data<br>
    Ex: echo date('d/m/y', strtotime('+2years')); // 2 anos mais<hr>";

    echo date("d/m/y", strtotime("+2 years"));

    echo "<hr>";
    

    $cinco_dias = strtotime("5 days");

    echo $cinco_dias . "<hr>";


    $dez_dias = strtotime("10 days");

    echo $dez_dias ."<hr>";


    $data_atual_mais_cinco = date("d/m/y", $cinco_dias );

    echo $data_atual_mais_cinco . "<hr>";


    $data_atual_mais_10 = date("d/m/y", $dez_dias);

    echo $data_atual_mais_10;