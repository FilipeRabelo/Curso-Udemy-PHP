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
            echo "A chave existe!";
        }else{
            echo "A chave NÃO existe!";
        }

        echo "<hr>";

        if(array_key_exists("profissao", $arr)){
            echo "A chave existe!";
        }else{
            echo "A chave NÃO existe!";
        }



        echo "<hr>";




        // ISSET //
        if(isset($arr["nome"])){

            echo "A chave existe! Funcao isset()";

        }else{
            echo "A chave NÃO existe! Funcao isset()";
        }

        echo "<hr>";

         // ISSET //
         if(isset($arr["profissao"])){

            echo "A chave existe! Funcao isset()";

        }else{
            echo "A chave NÃO existe! Funcao isset()";
        }



