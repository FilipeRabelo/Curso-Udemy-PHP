<?php

use Car as GlobalCar;

echo "temos tres formatos de visibilidade<br>
PUBLIC = propriedade ou metodo q pode ser acessado de qualuqer forma<br>
PROTECTED = Propriedade ou metado pode ser acessada apenas pela classe origem ou as que 
recebam a mesma heranca;<br>
PRIVATE = a propriedade ou metado pode ser acessada apenas pela classe q foi craida<hr>
";

    class Car{

        public $rodas = 4;
      
        private $vidros = "Sem pelicula";

        protected $portas = 4;

        public function get_vidro(){
            return $this->vidros;
        }

        public function get_portas(){
            return $this->portas;
        }

    }

    class Mecanico{

        public function alterar_rodas($carro){

            $carro->rodas = 10;

        }

        public function colocar_pelicula($carro, $pelicula){

            $carro->vidros = $pelicula;

        }

    }

    $carro = new Car;

    echo $carro->rodas;

    echo "<hr>";

    $filipe = new Mecanico;

    $filipe->alterar_rodas($carro);
    echo $carro->rodas;

    echo "<hr>";

    // Nao pode alterar pq é privado
    // $filipe->colocar_pelicula($carro, "G20");

    // $carro->pelicular_de_fabrica("G10");

    echo $carro->get_vidro() . "<br>";

    echo $carro->get_portas() . "<br>";









