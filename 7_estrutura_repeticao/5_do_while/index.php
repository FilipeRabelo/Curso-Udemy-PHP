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

    $j = 0;

    $teste = "Filipe";

    do{

        echo "Testando incremento do ... while $j <br>";

        if($j == 2){

            echo "$teste <br>";

        }

        $j++;

    }while($j <= 10);



    echo "<hr>";



    $i = 10;

    do{

        echo "Testando decremento do .. while $i <br>";

        if($i == 2){

            echo "$teste <br>";

        }

        $i--;

    }while($i >= 0);





    ?>
</body>

</html>