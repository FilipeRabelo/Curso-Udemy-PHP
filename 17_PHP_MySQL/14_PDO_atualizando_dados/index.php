<?php 

  $host = "localhost";
  $bd   = "cursophp"; // database - banco de dados
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);