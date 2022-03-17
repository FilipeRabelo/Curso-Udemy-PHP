<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador comparacao</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Operadores identico</h3>

    <?php
        
        if(5 == "5"){
            echo "5 é 5 <br>";
        }

        echo "<hr>";

        if(5 === "5"){ // operador identico //
            echo "5 é 5 <br>";
        }else{
            echo "5 nao é 5 <br>";
        }

        echo "<hr>";

        if(5 === 5){
            echo "5 é = 5";
        }else{
            echo "nao é 5 = 5";
        }
        






    ?>
</body>

</html>