<?php

    echo "Para declarar um METADO, usamos sintaxe de FUNCTION, porem
    DENRO DA CLASS<br>
    Sintaxe igual da FUNCAO<hr>";


    class Pessoa{

        function Falar(){
            echo "Ola mundo, eu sou um objeto...";
        }

        function Somar($a, $b){
            echo $a + $b;
        }

    }

    $filipe = new Pessoa;  // instanciar
    $filipe->falar();
    echo "<br>";
    $filipe->Somar(4 ,6);

    echo "<hr>";

    $giulia = new Pessoa;   // instanciar
    $giulia->Falar( );
    echo "<br>";
    $giulia->Somar(2, 5);



    echo "<hr>";



    class Comprimentar{

        function Saudacao(){

            echo "Bom dia Vida...";

        }

    }

    $filipe = new Comprimentar;

    $filipe->Saudacao();



    echo "<hr>";


    class Calculo{

        function Somar($a, $b){

            echo $a + $b;

        }

    }

    $calculadora = new Calculo;

    $calculadora->Somar(4, 5);


