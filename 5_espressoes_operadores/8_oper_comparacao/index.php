<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador comparacao</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Operadores de comparacao</h3>

    <?php
        
        if(3 == 3){
            echo "Cond verdadeira";
        }else{
            echo "Cond NAO verdadeira";
        }

        echo "<br>";
        
        if(4 == 3){
            echo "Cond verdadeira";
        }else{
            echo "Cond NAO verdadeira";
        }

        echo "<hr>";

        $nome = "Filipe";
        $nome_sistema = "Filipe";

        if($nome == $nome_sistema){
            echo "nome coincide";
        }else{
            echo "Nao verd";
        }

        






    ?>
</body>

</html>