<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo local - variavel local - php</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

        echo "Escopo local - variaveis";
        echo "<hr>";

        $x = 10; // global

        echo "$x Global <hr>";

        function teste(){
            
            $x = 5; // local

            echo "$x Local <hr>";

        }

        teste(); //Funcao sempre ser chamada //

        echo "$x Global <hr>";   // global

        teste();


        function testando(){

            $x = 12;  //local

            echo "$x local / 2 <hr>";

        }

        testando();

        echo "$x global <hr>";  //global

        teste();


        function soma($a, $b){
            return $a + $b;
        }

        echo soma(1, 5) . "<hr>"; //"A soma entre $a e $b é:  " . 
        echo soma(8, 5) . "<hr>";
        echo soma(1, 9) . "<hr>";
        echo soma(1, 4) . "<hr>";

        echo "$x Global <hr>";

        $x = $x + 1;

        echo "$x Global de x(10) + 1";

        echo "<hr>";

        $y = $x;

        echo $y;




    ?>
    
</body>

</html>