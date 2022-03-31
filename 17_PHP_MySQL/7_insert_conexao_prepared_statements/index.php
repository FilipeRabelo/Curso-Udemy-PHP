<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "cursophp";

  $conn = new mysqli($host, $user, $pass, $bd);

  // statement => stmt
  $stmt = $conn->prepare("INSERT INTO itens (NOME, DESCRICAO) VALUES (?, ?)"); // ?, ? QUE É O bind_parametros

  $nome = "Suporte de microfone";
  $descricao = "O suporte é novo e foi fabricado na china";

  // s = valor de string, i = integer, d = double
  $stmt->bind_param("ss", $nome, $descricao); // essas variaveis vireim de um post por ex //
  // os paremetros estao blindados

  $stmt->execute();



?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      background-color: aqua;
    }
  </style>
</head>
<body>

    <?php 

    $nome       = "Filipe";
    $sobre_nome = "Rabelo";

    ?>

    <?php echo $nome . " " . $sobre_nome ?>

</body>
</html>