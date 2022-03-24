<?php


    class Carro {

        public $ano = 2022;
        public $cor = "Vermelho";
        public $modelo = "Sedam";
        public $marca;

        function ligar(){

            echo "Vrum Vrum...";

        }

        function Andar($m){

            echo "O carro esta Andando<br>"; 

        }

    }

    $civic = new Carro;

    $civic->marca = "Honda";

    echo $civic->marca . "<br>";

    echo $civic->ano . "<br>";

    echo $civic->cor . "<br>";

    echo $civic->modelo . "<br>";

    echo $civic->ligar() . "<br>";
    echo $civic->Andar(20) . "<br>";
