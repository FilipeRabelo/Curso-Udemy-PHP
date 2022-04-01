<?php 

  $host = "localhost";
  $bd   = "cursophp"; // database - banco de dados
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);

  $id        = 1;
  $nome      = "Teclado";
  $descricao = "Esse teclado é novo e esta na caixa!";

  $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

  $stmt->bindParam(":id", $id);
  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);

  $stmt->execute();