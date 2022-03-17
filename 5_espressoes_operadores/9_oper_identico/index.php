<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador comparacao</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Operadores identico</h3>

    <?php
        
        if(5 == "5"){
            echo "5 é 5 '1'<br>";
        }

        echo "<hr>";

        if(5 === "5"){ // operador identico //
            echo "5 é 5 '2'<br>";
        }else{
            echo "5 nao é 5 '2'<br>";
        }

        echo "<hr>";

        if(5 === 5){
            echo "5 é = 5 '3'<br>";
        }else{
            echo "nao é 5 = 5 '3' <br>";
        }

        echo "<hr>";

        if(3 != "3"){
            echo "3 é diferente de teste <hr>";
        }else{
            echo "Nao é diferente! <hr>";
        }

        $a = 4;
        $b = 4;

        if($a == $b){
            echo "A é igual a B <hr>";
        }else{
            echo "A é diferente de B <hr>";
        }

        $x = 5;
        $y = 4 ;

        if($x != $y){
            echo "X é diferente de Y <hr>";
        }


        $y = $x + 1;

        if ($x != $y){
            echo "É diferente <hr>";
        }else{
            echo "Nao é diferente <hr>";
        }





    ?>
</body>

</html>