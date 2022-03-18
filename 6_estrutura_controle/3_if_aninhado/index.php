<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura if aninhado - PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Estrutura if aninhado</h3>
    <?php

    if (10 > 2) {

        echo "Entrou no primeiro if <hr>";

        if ("teste" == "teste") {

            echo "Entrou no segundo if <hr>";
        } else {

            echo "Entrou no 2 else 1 if true, 2 if false";
        }
    } else {

        echo "Entrou no primeiro else, primeiro if false, ele passa direto eo nao entra no 2 if";
    }

    echo "<hr>";

    if (10 > 2) {

        echo "Entrou no primeiro if <hr>";

        if ("teste" != "teste") {

            echo "Entrou no segundo if <hr>";
        } else {

            echo "Entrou no 2 else - 1 if true, 2 if false";
        }
    } else {

        echo "Entrou no primeiro else, primeiro if false, ele passa direto eo nao entra no 2 if";
    }

    echo "<hr>";

    if (10 == 2) {

        echo "Entrou no primeiro if <hr>";

        if ("teste" != "teste") {

            echo "Entrou no segundo if <hr>";
        } else {

            echo "Entrou no 2 else - 1 if true, 2 if false";
        }
    } else {

        echo "Entrou no primeiro else <br>  Primeiro if FALSE  <br> Ele passa direto e NAO ENTRA no 2 if";
    }

    /////////////////////////////////////////////////
    //exercicio

    echo "<hr>";

    $a = 55;

    $b = "teste";

    $c = "teste";

    if (is_int($a) || is_float($a)) {

        $a *= 2;

        echo $a . "<br>";

        if ($a > 100) {
            echo "$a é maior do que 100";
        } else {
            echo "$a nao 'emaior do que 100";
        }

    } else {

        echo "$a nao é um numero";

    }

    // EXERCICIO //
    echo "<hr> Exercicio 1 <br>";
    
    $velocidade = 60;

    if($velocidade < 40){
        echo "Velocidade correta";
    }else if($velocidade == 40){
        echo "Tome cuidado, velocidade perigosa";
    }else{
        echo "Velocidade acima de 40 km, Voce levou uma multa por excesso de velocidade";
    }
    

    echo "<hr> Exercicio 2 <br>";


    if($velocidade > 40){
        echo "Multa por excesso de velocidade";
    }else if($velocidade == 40){
        echo "Cuidado";
    }else{
        echo "Velocidade compativel";
    }


    ?>

</body>

</html>