<?php

    $comida = ["batata", "maçã", "pera", "feijão", "arroz"];

    $removidos = array_splice($comida, 2, 2);

    print_r($comida);

    echo "<hr>";

    print_r($removidos);