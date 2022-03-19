<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>Loop aninhado - PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>

    <h3>Loop aninhado- PHP</h3>

    <?php

        $i = 1; // PRIMEIRO CONTADOR

        while($i <= 10){

            echo "Loop Externo $i <br>";  // PARA CADA 1 LOOP ESTERNO ELE COMPLETA O INTERNO DEPOIS VOLTA PARA O EXTERNO

            $j = 1; // SEGUNDO CONTADOR

            echo "<hr>";

            while($j <= 5){

                echo "Loop interno $j <br>";

                $j ++;

            }

            $xxx = 1;

            // DA PARA ANINHAR MAIS LOOPS ANINHADOS DENTRO DA ESTRUTURA

            while($xxx <= 5 ){

                echo "Loop interno 2 $xxx <br>";

                $xxx ++;

            }

            $i ++;

            echo "<hr>";

        }



    ?>
</body>

</html>