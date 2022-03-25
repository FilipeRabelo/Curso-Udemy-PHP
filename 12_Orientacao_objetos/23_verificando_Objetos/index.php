<?php

    echo "Temos metodos para entender os OBJETOS<br>

    is_object() --> Verifica se uma VARIAVEL é um OBJETO  ou NÂO --> IF(){} <br> 

    get_class() --> Verifica a CLASSE de um OBJETO --> echo get_class()  <br> 

    method_exists() --> Verefica se um METODO existe em um OBJETO  ou NÂO --> IF(){}  <hr>";


    class Humano {

        public function Falar (){
            echo "Ola mundo";
        }

    }

    $filipe = new Humano;  // OBJETO

    $teste = 10;        // NÂO É OBJETO

    //PARA SABER SE É UM OBEJETO
    if(is_object($filipe)){
        echo "É um abjeto";
    }else{
        echo "NÃO é um objeto";
    }

    echo "<hr>";

    if(is_object($teste)){
        echo "É um abjeto";
    }else{
        echo "NÃO é um objeto";
    }

    echo "<hr>";

    //PARA SABER A QUAL CLASSE PERTECE ESSE OBJETO
    echo get_class($filipe) . "<hr>";

    // PARA SABER SE EXISTE O METODO NO OBEJTO
    if(method_exists($filipe, "Falar")){
        echo "Existe o METODO";
    }else{
        echo "METODO nao existe";
    }

    echo "<hr>";

    if(method_exists($filipe, "Andar")){
        echo "Existe o METODO";
    }else{
        echo "METODO nao existe";
    }








