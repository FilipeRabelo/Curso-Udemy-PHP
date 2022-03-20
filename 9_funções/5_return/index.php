


<h3>retorno de funcao</h3>

<?php


    // function soma($n1, $n2){

    //     echo $n1 + $n2;

    // }

    // soma(4, 4); 

    function soma($n1, $n2){

        return $n1 + $n2;

    }

    echo soma(4, 4) . "<br>";

    $x = soma(2, 4);  // Colocar a funcao numa variavel para ser melhor utilizada//
    echo $x . "<br>";

    $y = soma($x, 19); // utilizar  a variavel para criar outra variavel//
    echo $y . "<br>";


    function teste_retorno(){

        return "Testando";

    }

    $z = teste_retorno();

    echo $z;

    echo "<hr>";
    //exercicio

    function num($a){
        
        // return $a ** 2;

        $resultado = $a ** 2;
        return $resultado;


    }

    echo num(5) . "<br>";
    echo num(2) . "<br>";
    echo num(10) . "<br>";

    $z = num(5);
    echo $z . "<br>";

    $xxx = num($z + 55);
    echo $xxx;

