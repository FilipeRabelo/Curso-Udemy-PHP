//exercicio
<?php

    function num($a) {

        // return $a ** 2;

        $resultado = $a ** 2;
        return $resultado;
    }

    echo num(5) . "<br>";
    echo num(2) . "<br>";
    echo num(10) . "<br>";

    $z = num(5);
    echo $z . "<br>";

    $xxx = num($z + 55);
    echo $xxx;
