<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis por Variaveis- PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

        $x = "nome";
       
        echo "$x <br>";

        $$x = "Filipe"; 

        echo "$nome <br>";

    ?>

</body>

</html>