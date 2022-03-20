<?php

//CRIE UMA FUNCAO QUE RECEBA UM ARRAY DE INENS DE SUPERMERCADSO;
//RETORNE ESTE ARRAY EM FORMA DE STRING, SEPARADO POR VIRGULA;

$lista = ["Feijao",  "Arroz", "Fubá", "Macarrão", "Oleo"];

function lista_para_string($arr){

    $str = "Voçê levou estes itens do mercado: ";

    for($i = 0; $i < count($arr); $i++){

        if($i + 1 == count($arr)) {
            $str .= "$arr[$i]. ";
        }else{
            $str .= "$arr[$i], ";
        }

    }

    return $str;

}

echo lista_para_string($lista);
