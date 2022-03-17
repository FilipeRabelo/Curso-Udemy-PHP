<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador modulo</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
        echo"Operador modulo";
        echo "<hr>";

        echo 12 % 2; //resto 0 numero pá
        echo " Modulo, num pá <hr>";

        echo 12 / 2;
        echo " Divisao <hr>";

        echo 13 % 2;
        echo " Modulo, num impá <hr>";

        echo 12 / 2;
        echo " Divisao <hr>";

        echo 13 % 2;
        echo "<hr>";
        echo 13 % 5;       
        echo "<hr>";
        echo 13 % 9;       
        echo "<hr>";

        $a = 20; 
        $b = 4;

        echo $a % $b;
        echo "<hr>";

        echo 154 % 54;
        echo "<hr>";
        echo 2158% 124;
        echo "<hr>";

        $x = 547;
        $y = 3157;

        echo $x % $y;
        echo "<hr>";

        echo 20 % 10;


    ?>
</body>
</html>