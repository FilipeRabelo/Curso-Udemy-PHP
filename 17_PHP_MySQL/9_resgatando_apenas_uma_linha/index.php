<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "cursophp";

  $conn = new mysqli($host, $user, $pass, $bd);

  $id = 2;

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

  $stmt->bind_param("i", $id);

  $stmt->execute();

  $result = $stmt->get_result();

  $item = $result->fetch_row(); // para pegar somente um item

  print_r($item);

  $conn->close();

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

    
  
</body>
</html>