<h2>
    vamos criar um formulario e definir o METODO(method) como POST e tambem o arquivo ou
    ROTA que vamos acessar em ACTION; <br>
    No lado do servidor vamos acessar a variavel $_POST que contem os parametros enviados
    para o servidor <br>
    Faremos o processamanto e retornamos algo para o usuario;
</h2>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo $_POST</title>

    <style>
        body {
            background-color: aqua;            
        }
    </style>
</head>

<body>

        <!-- name é a chave q usamos para receber no backend -->

    <form action="cadastro.php" method="POST" >

        <div>
            <input type="text" name="nome" placeholder="Marca do Carro">
        </div>

        <div>
            <input type="text" name="idade" placeholder="Preço do Carro">
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Teto Solar"> Teto Solar
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Pelicula"> Pelicula
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>

</html>