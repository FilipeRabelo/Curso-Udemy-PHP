<!-- <h3>
  SELECIONANDO DADOS COM MYSQLI
  Para resgatar dados com MySQLi vamos utilizar a query do SQL -> QUERY,
  A instrução para inserir dados é SELECT,
  Vamos inserir o método query em uma variavel que é onde receberemos os resultados.
  Como método fetch_assoc, transformamos os resultados em um ARRAY;
</h3> -->

<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "cursophp";

  $conn = new mysqli($host, $user, $pass, $bd);


  $q = "SELECT * FROM itens";

  $resultado = $conn->query($q);

  $conn->close();

  // UM RESULTADO //
  $item = $resultado->fetch_assoc();

  print_r($item);

  // TODOS OS RESULTADOS // 
  $itens = $resultado->fetch_all();

  print_r($itens);
   