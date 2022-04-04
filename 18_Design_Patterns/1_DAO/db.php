<!-- ARQUIVO DE CONEXÃO  -->

  <?php

    $db   = "daotest";
    $host = "localhost";
    $user = "root";
    $pass = "";
    
    $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass); // CONEXÂO AO BANCO DE DADOS //

    