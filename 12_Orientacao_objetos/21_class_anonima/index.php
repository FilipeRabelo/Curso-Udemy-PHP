<?php

echo
"Classes anonimas sao criadas em uma VARIAVEL e nao possuem NOME<br>
Elas funcionam como qualquer outra classe<br>
Precisamos fechar ela com ';'

Ex: $ anonima = new class (){}; <hr>";




    $pessoa = new class(){

        public $nome = "Filipe";

        public function dizer_nome(){
            echo "Ola mundo, eu sou o $this->nome <br>";
        }

    };   // precisa fechar com ; //

    echo $pessoa->nome . "<br>";

    $pessoa->dizer_nome();
