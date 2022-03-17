<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem operadores - PHP</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>

        <?php

            $a = 5;
            $b = 9;
            $c = 154;
            $d = 415;
            $e = " ";

            echo ($a - $b) / $c;
            echo "<hr>";

            $e = $b * $a;
            echo $e;

            echo "<hr>";
            echo $e - $d * $a;
            echo "<hr>";

            echo ($a - $b) / $d * $e;



            // echo 2 + 3 * 5;
            // echo "<hr>";
            // echo (2 + 3) * 5;
            // echo "<hr>";
            // echo 5 + 2 /10;
            // echo "<hr>";
            // echo (5 + 2) / 10;
            // echo "<hr>";

            // $a = 5;
            // $b =2;
            // $c = 10;

            // echo $a + $b / $c;
            // echo "<hr>";
            // echo $c + $a / $b;
            // echo "<hr>";

            // $d = $a * $b * $c;
            // echo $d;

            // echo "<hr>";

            // $d = $a * ($b - $c);
            // echo $d;

            // echo "<hr>";



















        ?>
    
</body>

</html>