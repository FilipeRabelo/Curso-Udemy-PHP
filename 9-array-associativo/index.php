<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativo - PHP</title>
    <style>
        body{
            background-color: aqua;

            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Array associativo</h3>
    <hr>
    <?php

        $arr_assoc = ["chave" => "valor", "bool" => true];
        print_r($arr_assoc);
        "<br>";
        var_dump($arr_assoc);


        $arry = ["nome" => "Shark", "patas" => 4, "cor" => "Marrom"];

        echo $arry["nome"];
        echo"<hr>";
        print_r($arry);
        echo"<hr>";
        var_dump($arry);
        echo"<hr>";
        echo $arry["patas"];

    ?>

        <hr>  

    <?php

        $carro = [
            "portas" => 4,
            "cor" => "preto",
            "vidros" => "eletricos",
            "alarme" => true
        ];

        print_r($carro);
        echo"<hr>";
        echo "O carro possui " . $carro["portas"] . " portas.";
        echo "<hr>";
        echo "O carro possui vidros " . $carro["vidros"] . " nas " . $carro["portas"] . " portas.";

        echo "<hr>";

        // criando variavel com os elementos do array (Chave "KEY")
        $portas = $carro["portas"];
        $cor = $carro["cor"];

        echo "O carro possui $portas portas e é da cor $cor!";

        echo "<hr>";


        //desafio

        $pessoa = [
            "nome" => "Filipe",
            "cnh" => true,
            "idade" => 32
        ];

        $idade = $pessoa["idade"];
        $nome = $pessoa["nome"];

        if($pessoa["idade"] >= 18){
            echo "O $nome é maior de idade possui $idade";
        }


    ?>
    
</body>

</html>
