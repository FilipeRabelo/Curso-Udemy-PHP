<?php

    echo "Podemos converter uma string em array com a funcao explode<br>
    Passamos primeiro o separador como argumento<br>
    Depois a string que vai ser convertida <hr>";

    $frase = "Testando o explode";

    $frase_array = explode(" ", $frase); //TRANSFORMOU $FRASE => $FRASE_ARRAY//

    print_r($frase_array);

    echo "<br>";
    echo "<hr>";

    var_dump($frase_array);

    echo "<hr>";

    $frase_array2 = explode(", ", $frase);

    print_r($frase_array2);

    echo "<hr>";


    $frase_2 = "carro, aviao, moto, onibus, barco";

    $frase_array_3 = explode(", ", $frase_2);

    print_r($frase_array_3);