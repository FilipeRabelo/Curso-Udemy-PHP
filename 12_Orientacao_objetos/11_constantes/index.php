<?php

    echo "a constantes sao parecidas com variaveis, salvam valores em memoria;<br>
    Porem o seu VALOR NAO PODE SER ALTERADO
    Exemplo de sintaxe:
    public const CHAVE_API = 'ASO793mjjs39' <br>
    nome todo em LETRA MAIUSCULA<hr>";


    class Humano{

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;    
        
        //PARA MOSTRAR EM DENTRO DE METADO(FUNÇÃO) A SINTAXE MUDA
        function mostrar_constante(){

            echo self::BRACOS . "<br";

        }

    }

    $filipe = new Humano;

    echo $filipe::BRACOS . "<br>";
    echo $filipe::OLHOS . "<br>";
    echo $filipe::PERNAS . "<br>";

    $filipe->mostrar_constante();

    