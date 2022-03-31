<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd   = "cursophp"; 

$conn = new mysqli($host, $user, $pass, $bd);

$id = 4;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?"); 

$nome = "Guarda-roupa";

$descricao = "Guarda-roupa semi novo, feito com madeira de demolição";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

print_r($stmt);

if($stmt->error){
  echo "Erro: " . $mysqli_stmt->error;
}