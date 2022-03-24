<?php

    echo "O $ this se refere a instancia atual do OBJETO <br>
    Podemos assim alterar um valor de uma propriedade do objeto com : <br>
    $ this->propriedade = 'x' <br>
    podemos invocar um metado do objeto com this tambem<hr>
    ";


    class Animal{

        public $nome;

        function escolher_nome($nome){
            $this->nome = $nome;
        }

        function Latir(){
            return "Au Au Au <br>";
        }

        function Latir_forte(){
            return strtoupper($this->Latir());
        }

    }

    $frida = new Animal;

    echo "O nome do animal é: $frida->nome <br>";
   
    $frida->escolher_nome("Frida");

    echo "O nome do animal é: $frida->nome <br>";


