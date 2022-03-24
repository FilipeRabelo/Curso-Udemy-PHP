<?php

    echo "Para chegar a ANCESTRALIDADE de uma classe utilizamos o operador 
    instanceof;<br>
    Podemos inserir em um IF, pois vai retornar um booleano<br>
    $ objeto instanceof Humano<hr>";

    class Humano{

    }

    class Animal{
        public $nome = "Bob";
    }

    $filipe = new Humano;

    if($filipe instanceof Humano){
        echo "Filipe é Humano <br>";
    } else{
        echo "Filipe não é um humano <br>";
    }

    $bob = new Animal;
    $bob->nome;

    if($bob instanceof Humano){
        echo "O $bob->nome é um Humano. <br> ";
    } else {
        echo "O $bob->nome não é um Humano! <br> ";
    }