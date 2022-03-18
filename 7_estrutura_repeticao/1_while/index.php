<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura repeticao While - PHP</title>
    <style>
        body{
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>
        <h3>Estrutura repeticao While - PHP</h3>
        <?php

            echo "Inclemento <br><br>";

            $x = 0; //inicio

            while ($x <= 10) { // 10 Final

                echo "$x <br>";  

                $x++; // x = x + 1 loop

            }

            echo "<hr>";

            
            echo "Declemento <br><br>";

            $y = 50;

            while($y >= 0){
                echo "$y <br>";
                $y--;
            }
            





        ?>
</body>
</html>