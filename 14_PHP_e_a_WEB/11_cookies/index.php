<h3>
    O HTTP é um porotocolo que NÂO mantém o sestado (STATELESS) <br>
    ou seja, apos o fim da requisição a conexão entre o usúario e o servidor
    é finalizada, a proxima conexão não possui mais relação entre ambos; <br>
    Para conseguir manter estes dados podemos utilizar os coockies; <br>
    O problema é que alguns navegadores não poermitem o uso de cookies ou os bloqueim.
    <hr>
</h3>
<h3>
    $_COOKIE (nome, valor e data de expiração) <br>
    Os cookies são strings que contém informações <br>
    A FUNÇÂO para adicionar um cookie é (SETCOOKIES) <br>
    (Recebe o nome do cookie, o valor dele e o tempo de inspiração que é opcional) <br>
    A função deve ser chamada antes do corpo da pagina, deve ser chamada primeiro,
    pois envia dados como HEADER (cabaçalho); <hr>
</h3>




<?php

    setcookie("nome", "Filipe", time() + 3600); // TEMPO ATIAL + O TEMPO REQUERIDO
    // SALVAMOS OS COKKIES PELO SETCOOKIES

    //RESGATAMOS ELE PELO ARRAY 
    if(isset($_COOKIE["nome"])){

        $nome = $_COOKIE["nome"];

    }

    print_r($_COOKIE);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: aqua;
        }
    </style>

</head>

    <body>

        <h2>Ola mundo!</h2>

        <?php if($nome != ""): ?>

            <p>Seja bem-vindo <?= $nome ?> </p>

        <?php endif ?>





    </body>

</html>