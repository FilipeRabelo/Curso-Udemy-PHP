




<?php

    function velocidade_maxima($vel){  //1 parametro

        if(is_int($vel)){
            echo "O carro atingiu a velocidade maxima de $vel km/h <br>";
        }else{
            echo "Por favor, passe um número inteiro!";
        }

    }

    velocidade_maxima(200);
    velocidade_maxima(210);
    velocidade_maxima(100);

    $velocidade = 125;
    velocidade_maxima($velocidade);

    velocidade_maxima("teste");


    echo "<hr>";


    //Mais parametros

    function descrever_animal($nome1, $raca){  // 2 Parametros

        echo "O nome do animal é $nome1 e é da raça $raca! <br>";

    }

    descrever_animal("Bob", "Pastor alemão");
    descrever_animal("Shark", "Pit Bull");
    descrever_animal("Toys", "Maltes");

    //