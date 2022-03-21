<?php

    echo "Podemos alterar as strings para 
            maisculas ou minúsculas com funcoes de php <hr>";

    echo "strtolower - Todas as letras para minúsculas <br>";
    echo "strtoupper - Todas as letras para MAIÚSCULAS";

    echo "<hr>";



    $str = "esta string esta em caixa baixa";

    echo strtoupper($str) . "<br>";

    $str2 = "ESTA STRING ESTA EM CAIXA ALTA";

    echo strtolower($str2) . "<br>";