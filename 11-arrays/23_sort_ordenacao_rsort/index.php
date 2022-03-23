<?php

    echo " sort / rsort ";
    echo "Para ordenar em ordem crescente podemos utilizar a funcao 'sort'<br>
    Para ordenar de forma inversa utilizamos o 'rsort'<hr>";

    $arr = [2,1,5,4,3,0,6,8,4,5,7,99,44];

   sort($arr); //ordem crescente//
   print_r($arr);

   echo "<hr>";

   $arr2 = [2,1,5,4,3,0,6,8,4,5,7,99,44];
  
   rsort($arr2); // ordem decrescente //
   print_r($arr2);





?>