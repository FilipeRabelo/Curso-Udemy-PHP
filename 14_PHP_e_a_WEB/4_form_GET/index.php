<h2>
    vamos criar um formulario e definir o metado como GET e tambem o arquivo ou 
    ROTA que vamos acessar em ACTION; <br>
    No lado do servidor vamos acessar a variavel $_GET que contem os paramentros enviados
    para o servidor <br>
    Faremos o processamanto e retornamos algo para o usuario;
</h2>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com GET</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>

</head>
<body>
            <!--action: arquivo onde vamos realizar nosso processamanto-->
    <form action="processamento.php" method="GET">    

        <div>
            <input type="text" name="nome" placeholder="Digie seu nome">  
        </div>

        <div>
            <input type="text" name="idade" placeholder="Digite sua idade">  
        </div>

        <div>
            <input type="submit" value="Enviar" >  
        </div>

    </form>
    
</body>
</html>