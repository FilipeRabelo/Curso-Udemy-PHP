<?php

    echo "A funcao date recebe um paramentro, que é o FORMATO DA DATA, e este é o 
    primeiro parametro da mesma<br>
    A resposta sera a DATA ATUAL<br>
    Ex: date('d/m/y'); // day //month // year <hr> ";



    $d = date('d/m/y'); // day //month // year 
        echo $d . "<hr>";

    $d2 = date("d, M - Y"); // ou date('D, M - Y')
        echo $d2 . "<hr>";

    $d3 = date("d/m/Y");
        echo $d3 . "<hr>";

        echo date('l jS \of F Y h:i:s A');