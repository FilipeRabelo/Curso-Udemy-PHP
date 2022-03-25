<?php

    class Cachorro {

        public $nome;
        public $idade;
        public $porte;
        public $raca;

        public function __construct($nome, $idade, $porte, $raca){
            
            $this->nome = $nome;
            $this->idade = $idade;
            $this->porte = $porte;
            $this->raca = $raca;

        }

        // CRIANDO UM METADO PARA EXIBIR OS DADOS //
        public function exibir_animal(){

            echo 
            "Eu tinha uma cachorra que se chamava $this->nome, ela tinha $this->idade anos qndo faleceu,
            ela era de porte $this->porte e era da raca $this->raca. E eu a amava.<br> ";

        }

    }

    $nina = new Cachorro("Nina", 5, "Grande", "Pit-bull");  // as propriedades foram definidas nos parametros 

    $nina->exibir_animal();



    // echo "Eu tinha uma cachorra que se chamava $nina->nome, ela tinha $nina->idade anos qndo faleceu
    // , ela era de porte $nina->porte e era da raca $nina->raca. E eu a amava.<br> ";

