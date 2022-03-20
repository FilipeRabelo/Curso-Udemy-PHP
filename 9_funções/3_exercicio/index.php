<?php

    function multiplicacao($a, $b, $c){
        
        echo $a * $b * $c . "<br>";

    }

    echo multiplicacao(4, 5, 7);
    echo multiplicacao(1, 4, 7);
    echo multiplicacao(4, 3, 9);

    echo "<hr>";

    function multi(){

        $a = 4;
        $b = 12;
        $c = 78;
     
        $resultado = $a * $b * $c;
        
        echo $resultado . "<br>";

    }

    multi();

    echo "<hr>";

    function nome_completo(){

        $a = "Filipe";
        $b = "Rabelo";

        $nome_sobreNome = $a . " " . $b;

        echo $nome_sobreNome;

    }

    nome_completo();
    
    
    
