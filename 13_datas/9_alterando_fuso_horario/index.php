<?php

    echo "Por padrao p php utilizao fuso horario da maquina q esta sendo executado 
    ou seja, do servidor.<br>
    Podemos alterar manualemnte o fuso com a FUNCAO date_default_timezone_set<br>
    Ela recebe como parametro o novo fuso horario em string, <hr>";


    date_default_timezone_set("America/Sao_paulo");

    $data = new DateTime();

    print_r($data);
