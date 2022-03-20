<?php

    function soma($a, $b, $c){

        print_r(func_get_args());
        echo "<br>";
        print_r(func_num_args());
        echo "<br>";

        return $a + $b ;

    }

    soma(5,2, 5);
    soma(2,4, 7);