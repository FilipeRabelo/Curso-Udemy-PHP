<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura repeticao While - PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Estrutura repeticao While - PHP</h3>
    <?php

    echo "Break <br><br>";

    $x = 0;
    
    while ($x < 10) {

        echo "O X é o $x <br>";

        if($x === 5 ){  //qndo o x for = a 5 ele sai do loop com o break

            echo "Terminando o Loop";

            break;  // para sair do loop

        }

        $x++;
         
    }

    echo "saiu do loop";






    ?>
</body>

</html>