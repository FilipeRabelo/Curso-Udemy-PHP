




<?php

    function velocidade_maxima($vel){

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



