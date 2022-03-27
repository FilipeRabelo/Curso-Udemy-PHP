<?php

    $validacoes = [];

    if (count($_POST)) {

        if ($_POST["nome"] === "") {
            $validacoes[] = "Por favor, preencha o nome do usuário!";
        }

        if ($_POST["email"] === "") {
            $validacoes[] = "Por favor, preencha o seu E-mail!";
        }

        if ($_POST["senha"] !== $_POST["confirmacao"]) {
            $validacoes[] = "As senhas devem ser iguais!";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacao do formulario</title>
    <style>
        body {
            background-color: aqua;
        }
    </style>
</head>

<body>

    <?php if (count($validacoes)): ?>
        <!--so vai aparecer se tiver validacoes para ser exibidas para o usuario -->
        <ul>

            <?php foreach ($validacoes as $validacao): ?>
                <!--Foreach para percorrer o Array -->
                <li> <?= $validacao ?> </li>
            <?php endforeach; ?>

        </ul>
    <?php endif; ?>


    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite se nome:">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite se E-mail:">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha:">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Confirme a sua senha:">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>

</html>