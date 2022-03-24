<?php

class Carro {

    public $cor;
    public $teto_solar;
    public $velocidade_maxima;

    function Set_velocidade_maxima($vel){

        $this->velocidade_maxima = $vel;      

    }

    function Get_velocidade_maxima(){

        echo "A velocidade marxima é $this->velocidade_maxima km/h <br>";

    }

}

$bmw = new Carro;

$bmw->cor = "Branca";
$bmw->teto_solar = true;

$bmw->Set_velocidade_maxima(200);

$bmw->Get_velocidade_maxima();

echo "<hr>";

$ferrari = new Carro;

$ferrari->Set_velocidade_maxima(240);

$ferrari->Get_velocidade_maxima();