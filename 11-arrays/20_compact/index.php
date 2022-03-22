<?php

    echo "Função (compact) podemos criar um array a partir de variaveis; passamos 
    para a função o nome das variaveis em strng, e entao um novo array é criado, podemos atribuir a uma variavel<hr>";


    $marca = "BMW";
    $motor = 3.0;
    $teto_solar = true;
    $portas = 4;

    $carro = compact("marca", "motor", "teto_solar", "portas");

    print_r($carro);
    echo"<hr>";
    var_dump($carro);

    echo "<hr>";

        $Profissao = "programador";
        $Cidade = "Bh";
        $Estado = "Mg";
        $Tel = 34343043;

    $cadasto = compact("Profissao", "Cidade", "Estado", "Tel");
    print_r($cadasto);
    echo "<hr>";

    foreach($cadasto as $key => $value){

        echo "$key: $value <br>";      

    }