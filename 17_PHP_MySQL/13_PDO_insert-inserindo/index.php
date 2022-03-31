<?php 

  $host = "localhost";
  $bd   = "cursophp"; // database - banco de dados
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);

  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");
  // podemos colocar o nome ao inves de interrogação ... :nome, :descricao;

  $nome      = "Suporte monitor";
  $descricao = "O suporte esta novo e na caixa ainda";

  $stmt->bindParam(":nome",  $nome );
  $stmt->bindParam(":descricao", $descricao );

  $stmt->execute();

  