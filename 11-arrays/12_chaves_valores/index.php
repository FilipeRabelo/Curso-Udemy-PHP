<?php

    echo "array_keys = recebemos um array apenas com as chaves de um array, <br>
            array_values = recebemos um array com apenas os valores de uma array<hr>";


   $carro = [
       "cor" => "Branco",
       "portas" => 4,
       "vidros" => "Eletrico",
       "trava" => "Eletrica"
   ];

   print_r(array_keys($carro));
   echo "<hr>";
   print_r(array_values($carro));
   echo "<hr>";

   var_dump(array_keys($carro));
   echo "<hr>";
   var_dump(array_values($carro));