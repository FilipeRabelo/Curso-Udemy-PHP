<?php

    class Humano{

        public $nome = "Filipe";
        public $idade = 32;
        public $profissao = "Programador";

        protected function Falar(){
            echo "Ola mundo, eu sou professor de programação <br>";
        }

        public function acesso_falar(){
            $this->Falar();
        }
    }

    class Professor extends Humano{
        public function acesso_falar_programador() {
            $this->Falar();
        }

        public $disciplina = "Logica de programação";

        public function professor_esta_lecionando(){
            echo "O professor esta dando aula de $this->disciplina <br>";
        }
    }

    $giulia = new Professor;

    $giulia->acesso_falar();
    $giulia->professor_esta_lecionando();

    $giulia->nome = "Giulia";
    $giulia->idade = 4;

    echo "Seu nome é $giulia->nome. <br>";
    echo "Voce tem $giulia->idade anos. <br>";

    echo "<hr>";



    // $filipe = new Humano;

    // echo $filipe->nome . "<br>";
    // echo $filipe->idade . "<br>";
    // echo $filipe->profissao . "<br>";

    // $filipe->Falar();

    // echo "<hr>";



