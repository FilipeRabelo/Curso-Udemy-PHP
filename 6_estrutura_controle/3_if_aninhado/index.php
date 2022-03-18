<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura if aninhado - PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
        <h3>Estrutura if aninhado</h3>
    <?php

    if(10 > 2) {

        echo "Entrou no primeiro if <hr>";

        if("teste" == "teste") {

            echo "Entrou no segundo if <hr>";

        }else{

            echo "Entrou no 2 else 1 if true, 2 if false";

        }

    }else{

        echo "Entrou no primeiro else, primeiro if false, ele passa direto eo nao entra no 2 if";

    }

    echo "<hr>";

    if(10 > 2) {

        echo "Entrou no primeiro if <hr>";

        if("teste" != "teste") {

            echo "Entrou no segundo if <hr>";

        }else{

            echo "Entrou no 2 else - 1 if true, 2 if false";

        }

    }else{

        echo "Entrou no primeiro else, primeiro if false, ele passa direto eo nao entra no 2 if";

    }

    echo "<hr>";

    if(10 == 2) {

        echo "Entrou no primeiro if <hr>";

        if("teste" != "teste") {

            echo "Entrou no segundo if <hr>";

        }else{

            echo "Entrou no 2 else - 1 if true, 2 if false";

        }

    }else{

        echo "Entrou no primeiro else <br>  Primeiro if FALSE  <br> Ele passa direto e NAO ENTRA no 2 if";

    }


      

    ?>

</body>

</html>