<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "cursophp";

  $conn = new mysqli($host, $user, $pass, $bd);

  // criar a query

  $table      = "itens";
  $nome       = "Chicará";
  $descricao  = "É uma chicara usada de cor rosa";
  // TUDO DENTRO DE VARIAVEIS//
  $q = "INSERT INTO $table (nome, descricao) VALUES ($nome, $descricao)";

?>