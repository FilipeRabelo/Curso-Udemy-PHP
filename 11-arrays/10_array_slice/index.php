<?php

     echo "array_slice podemos resgatar uma faixa de elementos de um array<br>
     Passamos 3 parametros: <br> 
     O array <br>
     Indice inicial <br>
     Quantos elementos queremso resgatar a partir do indice <hr>";

     $arr = [2, 4, 6, 8, 10, 16, 18, 14];

     $slice_1 = array_slice($arr, 1, 3);

     print_r($slice_1);
     echo "<br>";