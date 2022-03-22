<?php

    // $livro = [
    //     "nome" => "PHP",
    //     "capa" => "dura",
    //     "paginas" => 192,
    //     "cor" => "branco",
    //     "preco" => 15.90,
    //     "tamanho" => "grande"
    // ];

    $nome = "PHP";
    $capa = "Dura";
    $paginas = 192;
    $cor = "Branco";
    $preco = 15.90;
    $tamanho = "Grande";

    $livro = compact("nome", "capa", "paginas", "cor", "preco", "tamanho");

    print_r($livro);
    echo "<hr>";
    var_dump($livro);
    echo "<hr>";

    foreach($livro as $caracteristicas => $value){

        echo "$caracteristicas: $value <br>";

    }