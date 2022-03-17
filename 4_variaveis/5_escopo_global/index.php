<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esccpo global - variaveis - PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
        echo "Escopo global - Fora da Funcao";        
        echo "<hr>";


        $teste = "asd"; // 1

        echo "$teste global 1  <hr>";

        if (5 > 2) {

            $teste = "dsa 000"; //2

            echo "$teste if <hr>";
        }

        echo "$teste global 1";
        echo "<hr>";

        $teste = "xxx";  //3

        echo "$teste global 2 <hr>";

        function funcao(){

            $teste = "xsxsxs";

            echo "$teste Escopo da funcao";

        }

        funcao();

        echo "<hr>";

        function testando_global(){

            global $teste;

            

            echo "$teste global funcao";

        }

        testando_global();


    ?>

</body>

</html>