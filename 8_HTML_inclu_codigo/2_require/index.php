<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includ - PHP</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>

</head>

<body>
    
    <h3>Require - PHP</h3>

    <?php

    require "teste.php";

    ?>

    <p><strong> Aquivo de include</strong> </p>  
    
    <?php

        require "arquivos/funcao.php";

    ?>
    
</body>

</html>
