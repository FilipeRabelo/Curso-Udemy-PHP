<?php

  class Car{

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

    public function getcor(){

      return $this->cor;   // O this é o objeto q vamos criar 

    }

    public function setcor($cor){

      $this->cor = $cor;

    }

    ////////////////////////////////////////////////////////    

    public function getKm(){

      return $this->km;   // O this é o objeto q vamos criar 

    }

    public function setKm($km){

      $this->km = $km;

    }





  }