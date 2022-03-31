<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "cursophp";

  $conn = new mysqli($host, $user, $pass, $bd);

  $id = 4;   // id de inicio

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");  // condicao where

  $stmt->bind_param("i", $id);   // i de numero inteiro 

  $stmt->execute();    // exucutando a query

  $result = $stmt->get_result();    // pegamos o resultado da query

  $data = $result->fetch_all();  // transformando em arry e colocando em outra variavel

  print_r($data);




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