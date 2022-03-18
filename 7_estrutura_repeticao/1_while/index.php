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

            $x = 0; //inicio DEFINICAO DO CONTADOR

            while ($x <= 10) { // INICIO / DEFINICAO DA ESTRUTURA ONDE O 10 É O FIM // 

                echo "$x <br>";  //CORPO DO LOOP

                $x++; // x = x + 1 loop INCREMENTO DO CONTATOR

            }

            echo "<hr>";

            $a = 0; //inicio DEFINICAO DO CONTADOR

            while ($a <= 10) { // INICIO / DEFINICAO DA ESTRUTURA ONDE O 10 É O FIM // 

                echo "$a <br>";  //CORPO DO LOOP

                $a += 2; // x = x + 1 loop INCREMENTO DO CONTATOR

            }

            echo "<hr>";

            
            echo "Declemento <br><br>";

            $y = 10;

            while($y >= 0){

                echo "$y <br>";

                $y--;

            }

            echo "<hr>";

            $impar = 0;

            while($impar <= 10){

                if($impar % 2 != 0){   // IF PARA MOSTRAR SOMENTE OS NUMEROS IMPARES //

                    echo $impar . "<br>";

                }

                $impar ++;

            } 

            echo "<hr>";
            echo "Exercicio <br><br>";

            $arr = array("Filipe", 54, true, "sol", "lua", 548, 874, -578, "Giulia", "Rafael");

            $x = count($arr);
            $y = 0;

            while ($y < $x){

                if(is_string($arr[$y])) {

                    echo $arr[$y] . "<br>";

                }

                $y++;

            }   
            





        ?>
</body>
</html>