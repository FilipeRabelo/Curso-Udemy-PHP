<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checando numeros Floats - PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php

        echo "<h3>is_float() </h3>";

        $a = 1.12;

        echo $a;
        echo "<br>";
        echo 1.123;
        echo "<br>";
        echo 12.5 + 1.3278;
        echo "<br>";
        echo 12 + 1.3278;
        echo "<hr>";

        if(is_float($a)){
            echo $a . " É um Numero Float/Real";
        }else{
            echo $a . " Nao é um numero Float/Real";
        }

        echo "<hr>";

        $b = "Teste";

        if(is_float($b)){
            echo $b . " É um Numero Float/Real";
        }else{
            echo $b . " Nao é um numero Float/Real";
        }

        echo "<hr>";

        if(is_float(14578.25)){
            echo " É um Numero Float/Real";
        }else{
            echo " Nao é um numero Float/Real";
        }

        



    ?>
    
</body>
</html>