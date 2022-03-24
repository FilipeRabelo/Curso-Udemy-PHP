<?php

    class Pessoa {

        public $nome = "Filipe";
        public $idade =32;

        function Andar($m){

            echo "Eu andei $m metros hoje! <br>";

        }

    }

    $filipe = new Pessoa;

    echo $filipe->Andar(5458);

    echo $filipe->nome . "<br>";

    echo "Possui: " . $filipe->idade . " anos de idade <br>"  ;





    echo "<hr>";





    class Pessoa2{

        public $nome = "Giulia";
        public $idade = 6;

        function Andar ($m){
            echo "A pessoa andou $m metros!";
        }

        function Falar(){
            echo "Bom dia ..";
        }

    }

    $giulia = new Pessoa2;

    echo $giulia->Falar() . "<br>";
    echo $giulia->Andar(1000) . "<br>";
    echo $giulia->nome . "<br>";
    echo $giulia->idade . "<br>";


?>























