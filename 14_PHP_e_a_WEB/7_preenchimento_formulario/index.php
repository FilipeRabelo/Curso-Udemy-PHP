<h3>
    Podemos preencher o formúlario com dados que vierem da requisição <br>
    Isso acontece bastante em resultados de busca ou edições de registro <br>
    Podemos fazer uma checagem de se o dado foi enviado e recebido para a pagina,
    e utilizar o echo para exibir no atributo value do input <br>

    DADOS MOCADOS, para fazer apenas uma apresentacao grafica do projeto <br>
    eles nao estao no servidor...
    <hr>
</h3>




<?php

    $usuario = [
        "nome" => "Filipe",   // O input ja vai estar com esses dados ///
        "idade" => 32,
        "profissao" => "Programador"
    ];

    if ($usuario) {

        $nome = $usuario['nome'];
        $idade = $usuario["idade"];
        $profissao = $usuario["profissao"];
    }
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

        <form action="">
            <div>
                <input type="text" name="nome" placeholder="Digite seu nome: " value="<?= $nome ?>"> <!-- Input ja vao estar com os dados -->
            </div>
            <div>
                <input type="text" name="idade" placeholder="Digite seu idade: " value="<?= $idade ?>">
            </div>
            <div>
                <input type="text" name="profissao" placeholder="Digite seu profissao: " value="<?= $profissao ?>">
            </div>
            <div>
                <input type="submit" value="Enviando... ">
            </div>
        </form>

    </body>

</html>