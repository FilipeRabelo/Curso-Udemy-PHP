<?php

    echo " setDate --> Recebe ANO, MES e DIA, alterando completamente a DATA<br>
           setTime --> Recebe hora, minuto e segundo, alterando o TEMPO da DATA<hr>
    ";

    $data = new DateTime(); //objeto
    print_r($data);
    echo "<hr>";

    $data->setDate(1999, 12, 01);
    print_r($data);
    echo "<hr>";

    $data->setTime(05,12,10);
    print_r($data);
    echo "<hr>";


