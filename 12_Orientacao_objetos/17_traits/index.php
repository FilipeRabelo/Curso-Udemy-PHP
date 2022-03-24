<?php

    echo "As traits permitem o reuso do codigo sem hierarquia de classes, ou seja <br>
    SEM HERANÇA.<br>
    Podemos assim utilizar os metados da classe que foi feita q trait;
    Utilizamos a palavra reservada USE   ;<br>

    ex: class Teste{

        use ClasseTrait

    }<hr>";

    trait Objeto {

        public function Teste (){
            echo "Testando Trait de objeto <br>";
        } 

    }

    trait Testando {

        public $y = 10;
       
        public function Trair_teste(){
            echo "Esse metodo é da Trait testando <br>";
        }

    }

    class Central {

        use Objeto;
        use Testando;

    }

    $x = new Central;

    $x->Teste();
    $x->Trair_teste();

    echo $x->y;

    