<?php

    // print_r($_GET);

    if( isset($_GET["nome"]) ) {   // PARA VERIFICAR SE O NOME FOI PREENCHIDO OU NAO

        $nome = $_GET["nome"];
        $idade = $_GET["idade"];        

    }else{

        $nome = "Padrao";
        $idade = "Padrao";       

    }


?>

<h1>O seu nome é <?=  $nome  ?>, voce possui <?= $idade ?> </h1>


