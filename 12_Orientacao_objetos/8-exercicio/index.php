<?php

    class Pessoa {

        public $nome = "Filipe";
        public $idade =32;

        function Andar(){

            echo "Esta andando <br>";

        }

    }

    $filipe = new Pessoa;

    echo $filipe->Andar();

    echo $filipe->nome . "<br>";

    echo "Possui: " . $filipe->idade . " anos de idade <br>"  ;


echo "<hr>";

class Pessoa2{

    public $nome = "Giulia";
    public $idade = 6;

    function Andar (){

        echo "Andando... <br>";

    }

    function Falar(){

        echo "Bom dia ..";

    }

}

$giulia = new Pessoa2;

echo $giulia->Falar() . "<br>";
echo $giulia->nome . "<br>";
echo $giulia->idade . "<br>";
echo $giulia->Andar() . "<br>";


























