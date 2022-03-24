<?php

use Programador as GlobalProgramador;

    echo "A HERANÇA é o recurso da POO que a possibilidade de uma classe HER METODOS
    E PROPRIEDADE DE OUTRA<br>
    A palavra reservada é EXTENDS<br>
    Exe: class Programador extens Pessoa{

    }<hr>";



    class Humano {
        public $idade = 29;
        
        public function Falar(){
            echo "Ola mundo <br>";
        }

        //////////////////////////

        private function Gritar(){
            echo "PHP é muito bom!!! <br>";
        }

        public function Acesso_gritar(){
            $this->Gritar();
        }

        ////////////////////////

        protected function Falar_baixinho(){  // protected consigo acessar nas classes filhas // private NAO //
            echo "LAlalalal <br>";
        }

        public function acesso_falar_baixinho(){
            $this->Falar_baixinho();
        }

    }

    class Programador extends Humano{

        public function acesso_falar_baixinho_programador() {
            $this->Falar_baixinho();
        }


    }

    $filipe = new Humano;

    $filipe->Falar() . "<br>";
    $filipe->Acesso_gritar() . "<br";
    $filipe->acesso_falar_baixinho() . "<br>";

    echo $filipe->idade . "<br>";

    echo "<hr>";

    $giulia = new Programador;

    $giulia->Falar();
    $giulia->Acesso_gritar();
    $giulia->acesso_falar_baixinho();
    echo $giulia->idade;