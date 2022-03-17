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
    <h3>Operadores identico / nao identico</h3>

    <?php
        
       $a = 4;
       $b = 5;
       $c = 6;

       if($c > $b){
           echo "$c é maior que $b <hr>";          
       }

       if($a < $b){
           echo "$a é menor que $b <hr>";          
       }

       if($a < $c){
           echo "$a é menor que $c <hr>";          
       }



    ?>
</body>

</html>