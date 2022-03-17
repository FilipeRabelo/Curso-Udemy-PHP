<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incremento e decremento</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

    $x = 0;
    $y = 10;

    echo $x++;
    echo "<br>";

    echo $x--;
    echo "<br>";

    while ($x <= 10) {

        echo $x;
        $x++;
        
    }

    echo "<br>";

    do {

        echo $y;
        $y--;

    } while ($y >= 0);




    ?>
</body>

</html>