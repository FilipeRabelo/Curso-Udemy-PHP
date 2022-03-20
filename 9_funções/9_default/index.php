<?php

    function teste($a = "teste"){

        echo "O valor de A é : $a <br>";

    }

    teste();
    teste(545);

    echo "<hr";

    function define_cor_carro($cor = "Vermelha"){

        return "A cor do carro novo é: $cor";

    }

    $carroVermelho = define_cor_carro();
    echo $carroVermelho . "<br>";

    $carroAzul = define_cor_carro("Azul");
    echo $carroAzul . "<br>";

   