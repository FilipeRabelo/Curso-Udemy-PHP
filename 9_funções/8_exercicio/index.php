<?php

    $arr = [];

    for($i = 0; $i <= 30; $i++){

        array_push($arr, $i);

    }

    // print_r($arr);

    function array_maior_que_sete($array){

        $array_retorno = [];

        for($j = 0; $j < count($array); $j++){

            if($array[$j] > 7){

                array_push($array_retorno, $array[$j]);

            }

        }

        return $array_retorno;

    }

    $novo_array = array_maior_que_sete($arr);

    print_r($novo_array);

