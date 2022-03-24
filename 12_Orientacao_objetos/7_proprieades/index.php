<?php

    echo "Declarar uma propriedades vamos criar uma
    VARIAVEL dentro de uma CLASS<br>
    Porem precisamos definir uma PRIVACIDADE, EX: PUBLIC<br>
    UMa propriedade public pode ser acessada fora do escopo do objeto<br>
    ex: public $ idade = 32<hr>";



    class Car{

        public $rodas = 4;   //Propriedades//Variaveis
        public $aro = 20;
        public $cor = "Vermelha";

        function Ligar(){    //Metado/Funcao

            echo "Vrrummmmm";

        }

    }

    $ferrari = new Car;

    echo $ferrari->Ligar() . "<br>";

    echo $ferrari->rodas . "<br>";
  
    echo $ferrari->aro . "<br>";

    echo $ferrari->cor . "<br>";

    $ferrari->cor = "Azul";   //podemos alterar as variaveis ao longo do projeto
    echo $ferrari->cor;