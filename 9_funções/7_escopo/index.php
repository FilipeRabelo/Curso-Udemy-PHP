<?php

    // ESCOPO LOCAL
    
    $a = 10; //ESCOPO GLOBAL DE A

    function teste_escopo(){

        $a = 5;  // ESCOPO LOCAL DE A

       echo "ESCOPO LOCAL DE A $a <br><br>";

    }

    echo "ESCOPO GLOBAL DE A $a <br><br>";
    
    teste_escopo($a);

