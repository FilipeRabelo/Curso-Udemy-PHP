<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura if - PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
        <h3>Estrutura if</h3>
    <?php

        $a = 5;
        $nome = "Filipe";

        if($a == 5 && $nome === "Filipe"){
            echo "Confirmado";
        }else{
            echo "Negado";
        }

        echo "<hr>";

    ?>

</body>

</html>