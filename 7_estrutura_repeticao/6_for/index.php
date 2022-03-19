<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For - PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>

    <h3>For - PHP</h3>
    <hr>

    <?php

    //contador ; condicao ; incremento/decremento//

    $nome = "Filipe";

    for($n = 0; $n <= 10; $n++){

        echo "Testando com if de nome de variavel $n <br>";

        if($n == 5){
            echo "$nome <br>";
        }

    }

    echo "<hr>";

    for($x = 0; $x <= 10; $x++){

        echo "Contador $x <br>";

        if($x == 5 || $x == 7){

            $x++;
            
            continue;
            
        }

    }

    echo "<hr>";

    for($i = 10; $i >= 0; $i--){

        echo "Contador $i <br>";

        if($i == 5){

            $x--;
            
            break;
        }

    }

    echo "<hr>";


    // For Aninhado

    for($y = 0; $y <= 10; $y++){  

        echo "<br>Primeiro for '$y' <br><br>";

        for($z = 0; $z <= 5; $z++){
            echo "Segundo for $z <br>";
        }

    }






    ?>
</body>

</html>