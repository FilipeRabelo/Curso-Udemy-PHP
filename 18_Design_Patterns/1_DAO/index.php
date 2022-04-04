<?php

  include_once("db.php");
  include_once("dao/CarroDAO.php");

  $carroDao = new CarroDao($conn);

  $carro = $carroDao->findAll();


?>






<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        background-color: aqua;
      }
    </style>
  </head>

  <body>

      <h1>Insira um carro </h1>

      <form action="process.php" method="POST">

        <div>
          <label for="marca">Marca do Carro</label><br>
          <input type="text" name="marca" placeholder="Insira a marca:">
        </div>
        <br>        
        <div>
          <label for="km">Kilometragem do Carro</label><br>
          <input type="text" name="km" placeholder="Insira a Kilometragem:">
        </div>
        <br>
        <div>
          <label for="cor">Cor do Carro</label><br>
          <input type="text" name="cor" placeholder="Insira a cor do carro:">
        </div>
        <br>
        <input type="submit" value="Salvar">
        
      </form>

      <ul>
        <?php foreach($carro as $car): ?>
          <li><?= $car->getMarca() ?> - <?= $car->getKm() ?> - <?= $car->getCor() ?></li>
        <?php endforeach; ?>
      </ul>
    
  </body>

</html>