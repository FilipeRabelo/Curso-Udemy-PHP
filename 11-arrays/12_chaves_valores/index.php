<?php

    echo "array_keys = recebemos um array apenas com as chaves de um array, <br>
            array_values = recebemos um array com apenas os valores de uma array<hr>";


   $carro = [
       "cor" => "Branco",
       "portas" => 4,
       "vidros" => "Eletrico",
       "trava" => "Eletrica"
   ];

   //colocar em variaveis//

   $chaves = array_keys($carro);
   $valores = array_values($carro);

   print_r($chaves);
   echo "<hr>";
   print_r($valores);
   echo "<hr>";

   for($i = 0; $i < count($chaves); $i++){

    // print_r($chaves[$i]). "<br>";

    echo $chaves[$i] . "<br>";
    
   }

//    print_r(array_keys($carro));
//    echo "<hr>";
//    print_r(array_values($carro));
//    echo "<hr>";

//    var_dump(array_keys($carro));
//    echo "<hr>";
//    var_dump(array_values($carro));