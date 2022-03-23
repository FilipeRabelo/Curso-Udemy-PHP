<?php

    echo "Foreach = Utilizamos a notação de chave  = > valor, 
    temos acesso rapido tambem a arrys associativos<br>; 
    Ex: foreach($ itens as $ key => $ value){}; <br>
    chave = referencia;
    <hr>";



    $filipe = [
        "nome" => "Filipe",
        "idade" => 32,
        "profissao" => "programador"
    ];

    $giulia = [
        "nome" => "Giulia",
        "idade" => 6,
        "profissao" => "estudante"
    ];

    foreach($filipe as $caracteristicas => $value){   //$caracteristicas = $key //

        echo "$caracteristicas => $value <br>";

    }

    echo "<hr>";

    foreach($giulia as $caracteristicas => $value){

        echo "$caracteristicas => $value <br>";

    }