<?php

  include_once("db.php");
  include_once("dao/CarroDAO.php");

  $carroDao = new CarroDao($conn);

  $marca = $_POST["marca"];
  $km    = $_POST["km"];
  $cor   = $_POST["cor"];

  $newCarro = new Carro();

  $newCarro->setMarca($marca);
  $newCarro->setKm($km);
  $newCarro->setcor($cor);
  
  $carroDao->create($newCarro);

  header("location: index.php");