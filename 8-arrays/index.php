<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - conjunto - lista - PHP</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

        echo "<h3> Array simples </h3><hr>";

        $a = [1, 2, 3];

        echo "Com var_dump( ) <br>";
        var_dump($a);
            echo"<br>";
        echo $a[1];

            echo "<hr>";

        echo "Com pint_r( ) <br>";
        print_r($a);
            echo"<br>";
        echo $a[0];

            echo "<hr>";

            $arry1 = ["Rabelo", 201, false]; // com dados variados
            $arry = ["Filipe", 1005, true];

            print_r($arry);
            echo "<br>";
            print_r($arry[1] + $arry1[1]);
            echo "<br>";
            print_r($arry[0] . " " . $arry1[0])


    ?>
</body>
</html>