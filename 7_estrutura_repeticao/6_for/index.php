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

    //EXERCICIOS
    //contador ; condicao ; incremento/decremento//

    $arr = [
        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
        11, 12, 13, 14, 15, 16, 17, 18, 19, 20
    ];

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] % 2 == 0) {

            echo "Número: $arr[$i]. <br>";
        }
    }
    echo "<hr>";

    //EXERCICIOS
    //Criando o array com um metado//

    $arr = [];

    for ($i = 1; $i <= 10; $i++) {

        array_push($arr, $i);  //argumento , elemento

    }

    print_r($arr);





    //EXERCICIOS
    echo "<hr>";

    $arr_2 = [];

    for ($x = 10; $x <= 20; $x++) {

        array_push($arr_2, $x);
    }

    print_r($arr_2);
    
    echo "<br>";

    for ($x = 0; $x < count($arr_2); $x++) {

        if ($arr_2[$x] % 2 != 1) {

            echo " Numero impa $arr_2[$x] <br>";

        }

    }










    echo "<hr>";

    $nome = "Filipe";

    for ($n = 0; $n <= 10; $n++) {

        echo "Testando com if de nome de variavel $n <br>";

        if ($n == 5) {
            echo "$nome <br>";
        }
    }


    echo "<hr>";


    for ($x = 0; $x <= 10; $x++) {

        echo "Contador $x <br>";

        if ($x == 5 || $x == 7) {

            $x++;

            continue;
        }
    }


    echo "<hr>";


    for ($i = 10; $i >= 0; $i--) {

        echo "Contador $i <br>";

        if ($i == 5) {

            $x--;

            break;
        }
    }


    echo "<hr>";



    // For Aninhado

    for ($y = 0; $y <= 10; $y++) {

        echo "<br>Primeiro for '$y' <br><br>";

        for ($z = 0; $z <= 5; $z++) {
            echo "Segundo for $z <br>";
        }
    }






    ?>
</body>

</html>