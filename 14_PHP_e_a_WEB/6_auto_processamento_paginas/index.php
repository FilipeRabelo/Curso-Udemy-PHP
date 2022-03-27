<?php

    $method = $_SERVER["REQUEST_METHOD"];

    if(isset($_POST["nome"])) {

        $nome = $_POST["nome"];

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

    <!-- <hr>
    <h3>
        Podemos criar uma pagina que faz o processamento dos dados e tambem exibe o input de informaçoes <br>
        Para isso devemos criar um IF() que checa se o metodo de requisição é ou não é um GET ou POST <br>
        <br>
        ($_SERVE['REQUEST_METHOD']); <br>  FAZ UMA REQUISICAO PARA A MESMA PAGINA Q ESTA! 
        <br>
        Depois criar as duas variações, para cada uma das possibilidades; <br>
        Ou checar se algum parametro veio pela requisição e então criar as variações.
        <hr>
    </h3> -->

    <?php
        if($method == "GET"):      // Abrir o IF   
    ?>
   
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>   

        <div>
            <input type="submit" value="Enviar" name="" id="">        
        </div>
    </form>

    <?php    
        else:    //Else do IF
    ?>

        <h2>O seu nome é <?= $nome ?> </h2>

    <?php
        endif;  // Para fechar o IF
    ?>

</body>

</html>


<?php
