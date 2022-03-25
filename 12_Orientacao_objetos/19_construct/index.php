<?php

    echo "Pelos construtores podemos inicializar objetos com valores de 
    propriedades unicas para cada objeto<br>
    Passamos como argumanto os valores das propriedades<br>
    
    ex: 
    function__construct($ portas, $ motor, $ teto_solar){}
    <hr>";


    class Car {

        public $portas;
        public $cor;
        public $modelo;
        public $cambio;

        function __construct($portas, $cor, $modelo, $cambio){

            $this->portas = $portas;
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->cambio = $cambio;

        }

    }

    $civic = new Car(4, "Vermelho", "Civic", "Automatico");
    $bmw = new Car(4, "Preta", "BMW-i320", "Automatico");

    echo 
    "O carro é do modelo $civic->modelo, tem a cor $civic->cor 
    e possui $civic->portas portas, cambio $bmw->cambio. <br>";

    echo 
    "O carro é do modelo $bmw->modelo, tem a cor $bmw->cor 
    e possui $bmw->portas portas. <br>";




