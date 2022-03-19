<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue - PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>

    <h3>Continue- PHP</h3>

    <?php

    $a = 10;

    while ($a > 0) {

        if($a == 5 || $a == 7){

            // echo "Pulou a execucao $a <br>";

            $a --; // evitar loop infinito
            
            continue;
        }

        echo "Executando o loop '$a' <br>";

        $a--;

    }

    echo "<hr>";

    //exercicio

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;

    while($i < count($arr)){

        $numero_atual = $arr[$i];

        if($numero_atual == 30 || $numero_atual == 40){

            $i++;

            continue;

        }

        echo "$arr[$i] <br>";

        $i++;

    }





    ?>
</body>

</html>