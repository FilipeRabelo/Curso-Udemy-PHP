<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis - PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

    $nome = "Filipe";

    echo $nome;

    echo "<br>";

    $teste = "Algum valor";

    echo $teste;

    echo "<br>";

    $var1 = 556485;
    $var2 = "Teste";
    $var3 = true;
    $moveis = [
        "cama", 
        "mesa", 
        "cadeira",
        "chuveiro"
    ];

    echo $var1;
    echo "<br>";
    echo $var2;
    echo "<br>";
    echo $var3;
    echo "<br>";
    print_r($moveis);
    echo "<br>";
    var_dump($moveis);
    echo "<br>";
    echo $moveis[1];

    echo "<br>";
    echo "<br>";

    $x = 5;
    $y = 6;
    $z = $x + $y;
    $res = 11;

    echo "O resultado de $x + $y = é $z.";

    echo "<hr>";

    if($x + $y == 11 ){
        echo "ok";  
    }

    echo "<hr>";

    if($x + $y == 11 && $res == $x + $y){
        echo "Resultado ok";
    }else{
        echo "Resultado errado";
    }







    ?>

</body>

</html>