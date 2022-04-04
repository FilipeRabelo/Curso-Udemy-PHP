<?php

  include_once("models/Carro.php");  // esse cara vai ser chamado pelo index //

  class CarroDAO implements CarroDAOinterface {

    private $conn;
    
    public function __construct(PDO $conn){
      $this->conn = $conn;
    }
    


    public function findAll(){

      $carro = [];

      $stmt = $this->conn->query("SELECT * FROM carro");

      $data = $stmt->fetchAll();

      foreach($data as $item){
        
        $car = new Carro();
        $car->setId($item["id"]);
        $car->setMarca($item["marca"]);
        $car->setKm($item["km"]);
        $car->setCor($item["cor"]);

        $carro[] = $car;

      }

      return $carro;

    }

    public function create(Carro $carro){

      $stmt = $this->conn->prepare("INSERT INTO carro (marca, km, cor) VALUES (:marca, :km, :cor)"); //QUERY

      $stmt->bindParam(":marca", $carro->getMarca());
      $stmt->bindParam(":km",    $carro->getKm());
      $stmt->bindParam(":cor",   $carro->getCor());

      $stmt->execute();

    }


  }