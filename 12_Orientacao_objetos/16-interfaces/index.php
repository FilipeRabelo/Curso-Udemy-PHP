<?php

    echo "As interfaces criam um MODELO de definição de uma classe.   <br>
    Entao toda classe que implementar uma interface, devera implementr tambem duas 
    propriedades e metados, obrigatoriamente;   <br>
    A palavra reservada é implements;   <br>
    class Humano implements Caracteristicas.
    
    IMPREMENTAR ===>>  implements   <hr>";


    interface Caracteristicas {

        public const NOME = "Filipe";

        public function Falar();

    }

    class Humano implements Caracteristicas {

        public $idade = 32;

        public function Falar(){
            echo "Ola mundo!!!";
        }

        public function dizer_nome(){
            echo "Meu nome é: " . self::NOME . "<br>";
        }

    }

    $filipe = new Humano;

    $filipe->Falar();

    echo "<br>";

    $filipe->dizer_nome();