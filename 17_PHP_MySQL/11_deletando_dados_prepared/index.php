
<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "cursophp";

  $conn = new mysqli($host, $user, $pass, $bd);

  // $id = 4;  pdemos tbm pelo nome 
  $nome = "Guarda-roupa";
  
  $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

  $stmt->bind_param("s", $nome);  

  $stmt->execute(); // executar

  $stmt->close();

