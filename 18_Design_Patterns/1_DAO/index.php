<?php

  include_once("db.php");

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
      background-color: aqua;
    }
  </style>
</head>
<body>

    <h1>Insira um carro </h1>
    <form action="process.php" method="POST">
      <div>
        <label for="marca">Marca do Carro</label>
        <input type="text" name="marca" placeholder="Insira a marca:">
      </div>

      <div>
        <label for="km">Kilometragem do Carro</label>
        <input type="text" name="km" placeholder="Insira a Kilometragem:">
      </div>

      <div>
        <label for="cor">Cor do Carro</label>
        <input type="text" name="cor" placeholder="Insira a cor do carro:">
      </div>
      <input type="submit" value="Salvar">

      
    </form>
  
</body>
</html>