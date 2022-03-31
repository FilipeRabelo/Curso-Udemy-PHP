<!-- <h3>
  EXECUTANDO UMA QUERY
  Para executar uma QUERY vamos usar o método QUERY;
  Ele deve ser usado a partir do OBJETO que fez a conexão;
  Vamos receber um determinado retorno como resultado,
  que podem ser os dados, caso seja um SELECT, por exemplo;
  É importante ao fim de todas as queries FECHAR a CONEXÃO,
  com o método CLOSE; Conexões abertas gastam recursos do servidor e prejudicam a aplicação.
</h3> -->


<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "cursophp";

  $conn = new mysqli($host, $user, $pass, $bd);  // ABRINDO CONEXÃO //

  // ASSUNTO DA AULA // 

  $sql = "SELECT * FROM itens"; // QUERY // 

  $result = $conn->query($sql); // METODO QUERY( ) PARA EXECUTAR A QUERY -> COLCOAMOS TUDO NA VARIAVEL

  print_r($result);

  $conn->close( ); // FECHANDO CONEXÃO //  OBRIGATORIO FECHAR A CONEXÃO //



