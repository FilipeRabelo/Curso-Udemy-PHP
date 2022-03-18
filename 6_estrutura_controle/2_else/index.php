<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura else - PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
        <h3>Estrutura else</h3>
    <?php

        $x = 10;
        $y = 22;

        $res_1 = "Deu true";
        $res_2 = "Deu false";

        if ($x >= $y) {
            echo $res_1;
        }else{
            echo $res_2;
        }

        echo "<hr>";

        $x = "Filipe";
        $y = "Filipe";

        $res_1 = "Deu true";
        $res_2 = "Deu false";

        if ($x == $y && 18 > 10) {
            echo $res_1;
        }else{
            echo $res_2;
        }

        echo "<hr>";


        echo "Utilizando is_int para verificar se a vareavel é int";

        echo "<hr>";

        $a = "Filipe";
        $b = 54;
        $c = true;

        $msg_1 = "É um numero inteiro";
        $msg_2 = "Nao é um numero inteiro";

        if($a == is_int($a)){
            echo $msg_1;
        }else{
            echo $msg_2;
        }

        echo "<hr>";

        if($b == is_int($b)){
            echo $msg_1;
        }else{
            echo $msg_2;
        }

        echo "<hr>";

        if($c == is_int($c)){
            echo $msg_1;
        }else{
            echo $msg_2;
        }

        echo "<hr>";

        $peso = 86.12;

        if($peso > 80){
            echo "O pacote esta pesado demais <br>";
        }else{
            echo "Peso dentro do limite <br>";
        }

        echo "<hr>";

        $peso = 16.12;

        if($peso > 80){
            echo "O pacote esta pesado demais <br>";
        }else{
            echo "Peso dentro do limite <br>";
        }

    ?>

</body>

</html>