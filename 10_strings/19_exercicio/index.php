

<?php


    $frase = "carro - navio - helicoptero - barco - jangada";

    $frase_array = explode(" - ", $frase); // " - " tem q ser igual a frase original

    print_r($frase_array);

    echo "<hr>";

    for($i = 0; $i < count($frase_array); $i++){


        echo "Item: $frase_array[$i] <br>";

    }

