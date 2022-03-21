<?php

    echo "Podemos criar novos indices com dados em um array<br>
    Basta colocar o nome do array com o novo indice em colchetes e atribuir um valor<br>
    Ex: $ arr[1] = teste <br>
    E em array associativos basta utilizar o nome da nova chave com a atribuicao de valor<hr>";

        $arr_1 = [];
        print_r($arr_1);

        $arr_1[0] = 10;
        echo "<br>";
        print_r($arr_1);

        $arr_1[2] = 15;
        echo "<hr>";
        print_r($arr_1);
        echo "<br>";

        //modificando valores
        $arr_1[0] += 55;

        print_r($arr_1);
        echo "<hr>";

        //arry associativo 
        $arr_assoc = [];
        print_r($arr_assoc);
        echo "<hr>";

        $arr_assoc["carro"] = "BMW";  // criando array associativo //
        print_r($arr_assoc); 
        echo "<hr>";

        $arr_assoc["Aviao"] = "Boing";
        print_r($arr_assoc);
        echo "<br>";
        var_dump($arr_assoc);






;

        echo "<hr>";







        $arr = [
                "carro",
                "moto",
                "barco",
                "cadeira",
                "mesa"
        ];

        print_r($arr[1]);

        echo "<hr>";

        $arr[1] = "teste";

        print_r($arr[1]);

        echo "<hr>";

        $arr_2 = [
                "cor" => "preto",
                "porta" => 4,
                "vidroEletrico" => true,
                "trava" => "Eletrica"
        ];

        print_r($arr_2);
        echo "<hr>";

        var_dump($arr_2);

        echo "<hr>";


        

