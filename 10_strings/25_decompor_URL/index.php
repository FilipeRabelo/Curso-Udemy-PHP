<?php

    echo "Funcao parse_url podemos decompor uma URL<br>
    vamos receber um arrray com todas as partes que a url tem, <br>
    alguns elementos que podem ser retornados sao : protocolo, host, parametro.<hr>";

    $url = "https://www.google.com";

    $aray_url = parse_url($url);

    print_r($aray_url);
    echo "<hr>";

    echo $aray_url["host"];
    echo "<br>";
    echo ($aray_url["scheme"]);

    $url_2 = "http://www.horadecodar.com.br/usuarios/matheusbattisti?id=12&nome=matheus";

    $array_url2 = parse_url($url_2);

    print_r($array_url2);
