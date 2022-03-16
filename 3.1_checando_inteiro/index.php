<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checando numero inteiro</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

        if(is_int(5)) {
            echo"É um inteiro";
        }else{
            echo "Nao é inteiro.";
        }    

        echo "<hr>";

        $a = 10.2;
        if(is_int($a)){
            echo $a . " É um Numero inteiro";
        }else{
            echo $a . " Nao é um numero inteiro";
        }

        
        


    ?>

</body>

</html>