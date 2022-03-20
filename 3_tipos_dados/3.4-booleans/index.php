<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booleanos = PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
        echo "Booleanos <br>";
        echo true;
        echo "<br>";

        if(true){
            echo "É verdadeiro <br";
        }

        if( 5 > 2){
            echo "É verdadeiro! <br>";
        }

        echo "<hr>";

        $pode_entrar = true;

        if($pode_entrar){
            echo "O usuario pode entrar! <br>";
        }

        $a = true;
        
        if(is_bool($a)){
            echo "É um booleano <br>";
        }

        if(is_bool(false)){
            echo "É um booleano <br> ";
        }

        if(0 == false){
            echo "0 é considerado falso! <br>";
        }

    ?>
</body>

</html>