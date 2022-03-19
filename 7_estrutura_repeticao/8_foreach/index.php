<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach- PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>foreach - PHP</h3>

    <?php

        $nomes = ["Filipe", "Giulia", "Rafael", "Daniela"];

        foreach($nomes as $nome){
            echo "O nome do indice atual é $nome <br>";
        }




    ?>
</body>

</html>