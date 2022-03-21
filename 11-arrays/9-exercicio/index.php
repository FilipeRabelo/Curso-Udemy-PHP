<?php

    $carro = [
        "Jaguar",
        3.0,
        "Azul",
        18,
        "Teto solar",
        "Automático"
    ];

    print_r($carro);
    echo "<hr>";
    var_dump($carro);
    echo "<hr>";

    list($nome_carro, $potencia, $cor_carro, $aro_roda, $teto, $cambio) = $carro;

    echo "O nome do carro: " . $nome_carro . "<br>";
    echo $potencia . "<br>";
    echo $cor_carro . "<br>";
    echo $aro_roda . "<br>";
    echo $teto . "<br>";
    echo $cambio . "<br>";