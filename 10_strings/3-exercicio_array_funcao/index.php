
<?php

    $arr = [
            "carro" => 20, 
            "moto" => 12, 
            "mesa" => 5, 
            "cadeira" => 7,
            "sofá" => 44,
            "geladeira" => 120
    ];

    function itens_caros($arr){

      $arr_itens_caros = [];

      foreach($arr as $item => $preco ) {

        if($preco > 10){

            array_push($arr_itens_caros, $item);

        }

      }

      return $arr_itens_caros;
       
    }

    $novo_arr = itens_caros($arr);

    print_r($novo_arr);

    var_dump($novo_arr);




