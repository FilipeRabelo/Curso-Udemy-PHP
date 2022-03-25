<?php

    echo "Funcao recebe em seus parametros:<br>
    hora, minuto, segundo, mes, dia e ano;<br>
    $ date = mktime(01,18,00,03,12,2000)<br>
    echo date ('d/m/y, $ date)<hr>";

    $dataNascimento = mktime(02, 12 ,33, 02, 05, 1991);

    echo $dataNascimento . "<br>";

    $data_nascimento_formatada = date("d/m/y", $dataNascimento);

    echo $data_nascimento_formatada . "<hr>";


    $data_especifica = mktime(14, 40, 55, 12, 01, 2088);

    $data_espeficica_formatada = date("D/m/Y", $data_especifica);
    echo $data_espeficica_formatada;