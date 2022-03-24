<?php

    class Pessoa {

        public $nome = "Filipe";
        public $idade =32;

        function Andar($m){

            echo "Ele andou $m metros hoje! <br>";

        }

    }

    $filipe = new Pessoa; //instanciar

    echo "O nome dele(a) é $filipe->nome e tem $filipe->idade anos de idade! <br>";
    
    echo $filipe->Andar(5458);

    echo "<hr>";



    $rafael = new Pessoa;
    // $rafael = new Pessoa2;


    $rafael->idade = 4;    //Atribuindo novas variaveis
    $rafael->nome = "Rafael";   //Atribuindo novas variaveis
 
    echo "O nome dele(a) é $rafael->nome e possui $rafael->idade anos <br>";
    echo $rafael->Andar(54);
    // echo $rafael->Falar();



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























