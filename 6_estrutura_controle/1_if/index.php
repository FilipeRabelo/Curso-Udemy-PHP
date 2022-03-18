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


        if (5 > 0) {
            echo "Entrou no if pq deu true ";
        }

        echo "<hr>"; 

        if (2 > 5) {
            echo "nao vai entrar no if pq deu false"; # code...
        }else{
            echo "nao vai entrar no if pq deu false";
        }

        echo "<hr>";

        $a = 5;
        $b = 2;

        $c = "$a é maior que $b";

        if ($a > $b) {
            echo "$c";
        }

        echo "<hr>";

        $nome1 = "Filipe";
        $nome2 = "Pedro";

        $m = "$nome1 é diferente de $nome2";

        if ($nome1 != $nome2) {
            echo $m;
        }

        echo "<hr>";

        $x = 12;
        $y = 11;

        $res1 = "Res 1: $x é maior ou igual a $y";
        $res2 = "Res 2: $x nao é maior ou igual a $y";

        if ($x >= $y) {
            echo $res1;
        }else{
            echo $res2;
        }

        echo "<hr>";

        // function operacao($x, $y){
        //     echo ($x >= $y);
        // }

        // operacao(56, 2);

        $idade_1 = 15;
        $idade_2 = 45;
        $idade_3 = 10;

        if ($idade_1 >= 18) {
            echo "Pode entrar";
        }else{
            echo "nao pode entrar";
        }

        echo "<hr>";

        if ($idade_2 >= 18) {
            echo "Pode entrar"; # code...
        }else{
            echo "Nao pode entrar!";
        }

        echo "<hr>";

        if ($idade_3 >= 18) {
            echo "pode entrar!"; # code...
        }else{
            echo "Nao pode entrar";
        }

        echo "<hr>";





    ?>

</body>

</html>