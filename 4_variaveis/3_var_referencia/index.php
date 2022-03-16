<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis por referencia - PHP</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

       $x = 10;
       $y =& $x; 

       echo $x ;
       echo "<br>";
       echo $y;

       echo "<br>";

       $y = 55;

       echo $x;

       echo "<br>";

       $y = "Filipe";

       echo $x;
       echo "<br>";
       echo $y;
    ?>

</body>

</html>