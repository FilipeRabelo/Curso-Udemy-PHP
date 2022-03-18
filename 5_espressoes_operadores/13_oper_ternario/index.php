<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternario</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Operador ternario</h3>

    <?php

        echo 5 > 2 ? "A condicao Deu true" : "A condicao Deu false";

        echo "<hr>";

        echo 5 > 2 &&  0 === "0" ? "true" : "false";

        echo "<hr>";

        $a = 55;
        $b = "Filipe";

        echo $a == 55 || $b === "Filipe" ? "Tudo certo" : "errado"










    ?>
</body>

</html>