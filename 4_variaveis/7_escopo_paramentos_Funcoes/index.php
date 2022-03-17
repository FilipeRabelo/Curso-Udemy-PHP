<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parametros funcoes - PHP</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Paramentros funcoes</h3>
    <?php
        
        function soma($a, $b){

            return $a + $b;

        }

        echo soma(4, 5);

        echo "<hr>";

        function adicionar($c, $d){

            echo $c + $d;
            echo "<br>";

        }

        adicionar(2, 4);
        adicionar(6, 8);
        adicionar(10, 10);





    ?>
</body>

</html>