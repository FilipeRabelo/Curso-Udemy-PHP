<?php 

  $host = "localhost";
  $bd   = "cursophp"; // database - banco de dados
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);

  $id = 5;

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

  $stmt->bindParam(":id", $id);

  $stmt->execute();

  $data = $stmt->fetch(PDO::FETCH_ASSOC);   
  print_r($data);

  echo "<hr>";

  $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($itens);

?>

<hr>

<?php

  class pessoas {
    public $nome;
    public $saudacao;

    public function __construct($nome, $saudacao){
        $this->nome = "$nome";
        $this->saudacao = "$saudacao";
    }

    public function Falar(){
      echo "Óla, $this->saudacao meu nome é $this->nome ";
    }  
  
  }

  $filipe = new pessoas("Filipe", "Bom dia");

  $filipe->Falar();

