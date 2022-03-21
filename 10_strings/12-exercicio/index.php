<?php

   $frase = "este item esta em ";
   $case = "promocao";

   echo $frase . strtoupper($case);

   echo "<hr>";




    $frase_completa = $frase . strtoupper($case);

    echo ucwords($frase_completa);




    

    echo "<hr>";

    echo ucfirst($frase) . strtoupper($case);