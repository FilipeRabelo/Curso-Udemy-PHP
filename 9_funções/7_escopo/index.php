<?php

    // ESCOPO LOCAL
    
    $a = 10; //ESCOPO GLOBAL DE A

    $b = 15;

    function teste_escopo(){

        $a = 5;  // ESCOPO LOCAL DE A
        
        
        global $b; //uTILIZANDO A VARIAVEL GLOBAL DENTRO DA FUNCAO COM GLOBAL

        static $c = 0;
        
        $a++;

        $b++; // alterando o B

        $c++;

       echo "ESCOPO LOCAL DE DENTRO DA FUNCAO  A $a <br><br>";

       echo "ESCOPO GLOBAL DENTRO FUNCAO DE B $b <br><br>";

       echo "ESCOPO STATIC DENTRO FUNCAO DE C $c <br><br>";

    }

    echo "ESCOPO GLOBAL DE A $a <br><br>";

    echo "ESCOPO GLOBAL DE B $b <br><br>";
    
    teste_escopo();

    echo "ESCOPO GLOBAL DE B ALTERADO DENRO DA FUNCAO $b <br><br>";

    teste_escopo();

