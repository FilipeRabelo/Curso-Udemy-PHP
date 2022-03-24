<?php

    echo "Classes Abstratas NAO podem ser instanciadas<br>
    Podemos ter metodos abstratos, que devem ser implementados obrigatoriamente 
    se uma classe herdar a abstrata<br>
    A palavra reservada tanto para classes como para metodos é ABSTRACT<br>
    
    Ex: abstract class ClasseAbstrata{}
    <hr>";

    abstract  class Teste{

        public static function Testando_classe(){
            echo "Esse metodo é de uma classe abstrata <br>";
        }

        abstract public function Teste_abs();

    }

    // $t = new Teste;

    Teste::Testando_classe();

    class Nova extends Teste{

        public function Teste_abs() {
            echo "Teste método abstrato. <br>";
        }

    }

    $n = new Nova;
    $n->Teste_abs();