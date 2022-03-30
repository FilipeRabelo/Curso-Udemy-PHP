<?php

    // Criar uma variavel com o nome de conn (conect) e instancia um novo objeto chamado mysqli();
    // Passar os parâmetros: host, usuário, senha e banco de dados; 

    // $conn = new mysqli("localhost", "root", "", "cursophp");

    //podemos colocar os parametros em variaveis para melhor aproveitamento //

    $host = "localhost";    //hospedeiro
    $user = "root";         // usuario
    $pass = "";             // senha
    $bd   = "cursophp";     // banco de dados

    $conn = new mysqli($host, $user, $pass, $bd);

  

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




        
    </body>

</html>