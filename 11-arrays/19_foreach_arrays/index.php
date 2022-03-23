<?php

echo "Foreach = Utilizamos a notação de chave  = > valor, 
    temos acesso rapido tambem a arrys associativos<br>; 
    Ex: foreach($ itens as $ key => $ value){}; <br>
    chave = referencia;
    <hr>";



$filipe = [
    "nome" => "Filipe",
    "idade" => 32,
    "profissao" => "programador"
];

$giulia = [
    "nome" => "Giulia",
    "idade" => 6,
    "profissao" => "estudante"
];

foreach ($filipe as $caracteristicas => $value) {   //$caracteristicas = $key //

    echo "$caracteristicas => $value <br>";
}

echo "<hr>";

foreach ($giulia as $caracteristicas => $value) {

    echo "$caracteristicas => $value <br>";
}

$cachorro = [
    "nome" => "Pit",
    "raca" => "pit-bull",
    "idade" => 5,
    "porte" => "grande"
];

echo "<hr>";

foreach ($cachorro as $caracteristicas2 => $value) {

    echo "$caracteristicas2 => $value <br>";   // CHAVE E VALOR        

}

echo "<hr>";

foreach ($cachorro as $value) {

    echo "$value <br>";     // SOMENTE O VALOR //

}

echo "<hr>";

$array_cachorros = [

    $primeiro_cachorro = [
        "nome" => "dog",
        "idade" => 5,
        "raca" => "pasto alemão",
        "porte" => "grande"
    ],

    $segundo_cachorro = [
        "nome" => "thor",
        "idade" => 4,
        "raca" => "pit-bull",
        "porte" => "grande"
    ],

];

print_r($array_cachorros);
echo "<hr>";
var_dump($array_cachorros);
echo "<hr>";


foreach ($array_cachorros[1] as $caracteristicas3 => $value) {

    echo "$caracteristicas3 => $value <br>";
}

echo "<hr>";

foreach ($array_cachorros[0] as $caracteristicas3 => $value) {

    echo "$caracteristicas3 => $value <br>";
}
