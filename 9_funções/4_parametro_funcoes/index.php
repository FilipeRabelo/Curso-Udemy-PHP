




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

    echo "<hr>";

    //Exercicio

    function saudacao($nome, $idade){

        if(is_string($nome) && is_int($idade)){
            echo "Ola, meu nome é $nome e tenho $idade anos de idade. <br>";
        }else{
            echo "Por favor, digite seu nome e idade.<br>";
        }

    }

    saudacao("Filipe", 32);
    saudacao(6, "Giulia");
    saudacao("Rafael", "ola");

    echo "<hr>";

    //Exercicio

    function parOuImpar($x){

        if($x % 2 !== 1){
            echo "$x é um numero Pá. <br>";
        }else{
            echo "$x é um numero Impá. <br>";
        }

    }

    parOuImpar(5);
    parOuImpar(254);
    parOuImpar(6);
    parOuImpar(875);