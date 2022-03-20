<?php

    function altera_dados($nome, $idade){

        $nome = "Sr. $nome";      
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = altera_dados("Filipe", 32);

    print_r($dados);

    echo "<hr>";

    echo "var_dump" . var_dump($dados);

    echo "<hr>";

    echo "Olá $dados[0], voçê tem $dados[1] anos! <br>";
    
   

    