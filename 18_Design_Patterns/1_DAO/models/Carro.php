
<h1>  
  Temos uma classe que define os metodos basicos pra gente poder manusear o OBJETO
  o processamento envia os dados para meu DAO, e o DAO recebe aquele objeto 
  pronto e e insere no banco
</h1>


<?php

  class Carro{

    // Foram criadas privadas pq vao ser alterados via METODOS
    private $id;
    private $marca;
    private $km;
    private $cor;

    // Agora vamos criar METODOS q vao ter a possibilidade de resgatar e inserir dados 
    // mas nada a nivel de banco e sim no OBJETO 
    
    public function getId(){

      return $this->id;   // O this é o objeto q vamos criar 

    }

    public function setId($id){

      $this->id = $id;

    }

    /////////////////////////////////////////////////////

    public function getMarca(){

      return $this->marca;   // O this é o objeto q vamos criar 

    }

    public function setMarca($marca){

      $this->marca = $marca;

    }

    ////////////////////////////////////////////////////////  
    
    public function getKm(){

      return $this->km;   // O this é o objeto q vamos criar 

    }

    public function setKm($km){

      $this->km = intval($km);

    }

        ////////////////////////////////////////////////////////    

    public function getCor(){

      return $this->cor;   // O this é o objeto q vamos criar 

    }

    public function setCor($cor){

      $this->cor = $cor;

    }

  }

  interface CarroDAOinterface{

    public function create(Carro $carro);
    public function findAll();


  }



