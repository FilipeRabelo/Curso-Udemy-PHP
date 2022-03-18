<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura switch- PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Estrutura switch</h3>
    <?php

        $x = 5;

        switch ($x){

            case 0;
                echo "X é igual a 0 <br>";
                break;

            case 1;
                echo "X é igual a 1 <br>";
                break;

            case 2;
                echo "X é igual a 2 <br>";
                break;

            case 55;
                echo "X é igual a 55 <br>";
                break;

            default:
            echo "X nao é igual a nenhum numero";   

        }


    ?>

</body>

</html>