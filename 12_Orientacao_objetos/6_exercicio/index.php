<?php

    class Cachorro {

        function Latir(){
            echo "O cachorro não para de latir, Au Au.. <br>";
        }
        
        function Andar($metros){
            echo "O cachorro andou $metros metros! <br>";
        }

    }

    $pitbull = new Cachorro;
    $pastor = new Cachorro;

    $pitbull->Latir();
    $pastor->Latir();

    echo "<hr>";

    $pitbull->Andar(1000);
    $pastor->Andar(50);
