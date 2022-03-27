<h2>
    Os inputs de CHECKBOX podem conter mais de um valor. <br>
    Para receber todos eles do backend, precisamos adicionar uma sintaxe de ARRAY no NAME <br>
    Assim receberemos todos os inputs marcados. <br>
    ex: name = "caracteristicas[]" <br> <hr>
</h2>



<?php

   if(isset($_POST["ingredientes"])) {   // SE EXISTIR ESSA VARIAVEL 

    $ingredientes = $_POST["ingredientes"];

    print_r($ingredientes); 

   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Abobora"> Abobora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Feijão"> Feijão
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Alcafe"> Alcafe
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
        </div>
        <div>
            <input type="submit"  value="enviar"> 
        </div>

    </form>
    
</body>
</html>




