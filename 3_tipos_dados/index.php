<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de dados - PHP</title>
    <style>
        body{
            background-color: aquamarine;
            text-align: center;
            color: black;
        }
    </style>
</head>

<body>
        <h3>Tipos de dados</h3>
        <hr>
        <?php
            echo "Numeros inteiros.";
            echo '<br>';

            $num_int1 = -44;
            $num_int2 = 1024;
            $num_int3 = 142;

            echo $num_int1 + $num_int3 . "<br>";
            echo $num_int2 * $num_int1 . "<br>";
            echo ( $num_int3 / $num_int2 - $num_int2);
        ?>

            <hr>

        <?php

            echo null;

            $nome = null;

            if(is_null($nome)){
                echo "O valor é nulo (NULL)";
            }else{
                echo "O valor nao é nulo";
            }

        ?>
    
</body>

</html>