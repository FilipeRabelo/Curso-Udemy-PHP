<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador logico</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Operador logico</h3>

    <?php

    if (5 < 2 && 10 < 100) {
        echo "True";
    } else {
        echo "False";
    }

    echo "<hr>";

    if (5 > 2 && 10 < 100) {
        echo "True";
    } else {
        echo "False";
    }

    echo "<hr>";

    if (5 < 2 || 2 < 5) {
        echo "Ok";
    }

    echo "<hr>";

    if (!(5 > 2)) {
        echo "ok";
    } else {
        echo "nao 2";
    }
    echo "<hr>";
    if (!(50 < 2)) {
        echo "ok";
    } else {
        echo "nao 2";
    }

    echo "<hr>";

    /////////////////////////////

    echo "operador cast <br>";

    $a = (string) 34;  // converte os tipos de dados // float, string, int //

    if ($a === "34") {
        echo "34 é string <hr>";
    }

    $b = (int) 12.9;

    if ($b === 12) {
        echo "conversao 1 ok <br>";
    }

    $c = (int) true;

    if ($c === 1) {
        echo "conversao 2 ok <br>";
    }

    $d = (int) [1, 2, 3];

    //    if($d === 1.0, 2.0, 3.0){  nao dá
    //        echo "consersao 3 ok <br>";
    //    }

    $e = (int) "testando"; // nao dá




    ?>
</body>

</html>