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

    }

    $nina = new Cachorro("Nina", 5, "Grande", "Pit-bull");

    echo "Eu tinha uma cachorra que se chamava $nina->nome, ela tinha $nina->idade anos qndo faleceu
    , ela era de porte $nina->porte e era da raca $nina->raca. E eu a amava.<br> ";

