<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings - PHP</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

    <body>  
        <?php
            $nome = "Filipe ";
            $sobre_nome = 'Rabelo';
            
            echo $nome . $sobre_nome;

            echo "<hr>";

            echo "Hello  'World' ";

            echo "<hr>";

            if(is_string($nome)){
                echo "$nome $sobre_nome é uma String" ;
            }
        ?>
    </body>
</html>