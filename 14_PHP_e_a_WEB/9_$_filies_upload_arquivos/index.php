<h3>
    UPLOAD - > $_FILES <br>
    Reuni as informaçoes de arquivos q sao enviados na requisicao, <br>
    Para enviar arquivos ao servidor vamos precisar mudar o <br> (ATRIBUTO) -> ENCTYPE do formulario para <br>
    (multipart/form-data); <br>
    Tambem sera necessario um input de tipo FILE <br>
    o tamanho do arquivo pode exaurira memoria do servidor; <br>
    Depois do envio, todos os dados da imagem estarao em (variavel global -> $_FILES);
    <hr>
</h3>











<?php

    if(isset($_FILES)){

        print_r($_FILES);

    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: aqua;
        }
    </style>
</head>

<body>

        <form action="index.php" method="POST" enctype="multipart/form-data">  <!--//IMPORTANTE// -->

            <div>
                <input type="file" name="imagem">   <!-- TODOS OS REQUESITOS SAO NECESSARIOS -->
            </div>
            <div>
                <input type="submit" value="ENVIAR">
            </div>

        </form>

</body>

</html>