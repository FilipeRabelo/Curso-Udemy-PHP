        verificando se chave existe

<?php

    echo "array_key_exists podemos verificar se ha um valor em uma KEY de um array,
    podemos usar um if ( )<br>
    Ex: array_key_exists('nome', $ arr), tbmexiste a ISSET <hr>";




        $arr = [
            "nome" => "Filipe",
            "idade" => 32
        ];

        if(array_key_exists("nome", $arr)){
            echo "A chave esiste!";
        }else{
            echo "A chave NÃO esiste!";
        }

