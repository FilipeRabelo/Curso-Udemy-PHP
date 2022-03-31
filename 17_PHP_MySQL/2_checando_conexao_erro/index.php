    <!-- <h2>Erro de conexao</h2>
    <p>
        CHECANDO A CONEXÃO
        Para verificar SE HOUVE erro na conexão -> propriedade: connect_errno;
        E para verificar O erro podemos utilizar o -> método: connect_error();
        Podemos inserir a checagem em um IF e mostrar a MSG de erro com um ECHO
    </p> -->


<?php  

    $host = "localhost";
    $user = "root";
    $pass = "";       
    $db   = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // if($conn->connect_errno) {
    //     echo "Erro na conexao! <br>";
    //     echo "Erro: " . mysqli_connect_error();
    // }

    if($conn->connect_errno) {
        echo "Erro na conexao! <br>";
        echo "Erro: " . $conn->connect_error;   // FORMA ORIENTADA A OBJETOS //
       
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de conexao</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>

</head>
    <body>
        <?php
            $nome     = "Filipe";
            $saudacao = "Ola mundo, eu sou o";
        ?>
        
        <?php echo $saudacao . " " . $nome ?>    
    </body>
</html>