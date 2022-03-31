<!-- <h3>
  Para CRIAR e DELETAR tabelas vamos usar as mesmas queries dp SQL puro
  porem como auxilio do metodo query; <br>
  DROP TABLE para deletar tabelas; <br>
  CREATE TABLE para criar tabelas <br>
  SEMPRE FECHAR A CONEXÃO APOS O FIM! <hr>
</h3> -->

<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "cursophp";

  $conn = new mysqli($host, $user, $pass, $bd);  //conexao//

  // CRIANDO UMA TABELA COM COLUNAS //

  // $q de querie
  $q = "CREATE TABLE teste (nome VARCHAR(100), sobre_nome VARCHAR(100))"; // NOVA TABELA NO BANDO 

  $conn->query($q); // CHAMANDO A NOVA TABELA $q PARA A CONEXÃO COM A QUERY//

  $conn->close(); //FECHANDO CONEXÃO //

  print_r($conn);













?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        background: aqua;
      }
    </style>
  </head>
  <body>

 


  </body>
  </html>