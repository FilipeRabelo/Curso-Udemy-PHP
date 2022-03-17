<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>concatenacao

    </title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
       
        $nome1 = "Filipe";
        $nome2 = "Rabelo";

        echo $nome1 . $nome2;
        echo "<hr>";

        $idade = 32;       

        echo $nome1 . $nome2 . "possui" . $idade . "anos!"  ;

       echo "<hr>";

       $saudacao = "Bom dia";
       $nome = "Giulia";
       $sobre_nome = "Rabelo";

       $frase =  $saudacao . " " . $nome . " " . $sobre_nome . ", como vc esta hoje?";

       echo $frase;


    ?>
</body>
</html>