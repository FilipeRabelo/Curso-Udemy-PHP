<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientacao a objetos - PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

        class Pessoa {   //Molde do objeto

            // public $nome = " ";

            function falar(){
                echo "Ola pessoal";
            }

        }       

        $filipe = new Pessoa();    //Novo objeto aprtir do molde (objeto) // Filho do objeto pai

        $filipe -> nome = "Filipe";  //Adicionando propriedades ao novo objeto Pessoa

        echo $filipe -> nome;

        echo "<br>";

        $filipe -> falar();

    ?>

</body>

</html>