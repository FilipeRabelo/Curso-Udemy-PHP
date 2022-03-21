<?php

    echo "imprima o númeor de çetras 'a' na frase apartir de um loop! <hr>";



    $frase = "O rato roeu a roupa do rei de Roma";

    $contador_de_as = 0; //precisa ficar fora d loop se nao vai zerar sempre

    for($i = 0; $i < strlen($frase); $i ++){        

        if($frase[$i] === "a"){
            $contador_de_as++;
        }
 
    }

    echo "O numero de Ás na frase é de: $contador_de_as "; // precisa ficar fora do loop se nao vai epetir sempre. // 