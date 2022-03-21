<?php

    echo "Podemos criar muitas variaveis com base em umarray<br>
    para isso vamos utiliar a funcao LIST<br>
    Ex: list($ nome, $ idade, $ profissao) = $ pessoa<hr>";

    $pessoa = ["Filipe", 32, "Programador", "castanho"];
    print_r($pessoa);
    echo "<hr>";

    list($nome, $idade, $profissao, $cor_olhos) = $pessoa;

    echo $nome . "<br>";
    echo $idade . " anos <br>";
    echo $profissao . "<br>";
    echo $cor_olhos . "<br>";