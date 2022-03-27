<h3> <span>SESSIONS</span>
    Com sessions podemos criar uma variavel que persiste em diferentes paginas <br>
    e tambem perdura por varias visitas ao mesmo site <br>
    A session utiliza recursos de cookies para seu funcionamento, e se o recurso <br>
    esstiver desabilitado propaga a sessão via URL <br>
    Sessions são utilizadas para: autetificação, carrinho de compra e tudo o
    que precisa persistir de pagina em pagina <br>
    Acaba sendo o recurso mais utilizado, comparado co os cookies <hr>
</h3>
<h3>    <span>Onde são salvas as SESSIONS?</span>
    As SESSIONS sao salvas em arquivos no computador que estamos OU no servidor da aplicação <br>
    O caminho para onde os aquivos são salvos fica em (PHP.INI) na configurão (SESSION.SAVE_PATH); <br>
    As sessions podem ser salvas em dois formatos: o proprio do PHP e 
    tambem o Web Distributed Data eXchange (WDDX) <hr>
    "UTILIZA O MECANISMO DO COOKIES, SALVA EM UM ARQUIVO E O PHP Q DIRECIONA O PATH" <hr>
</h3>
    
      <h3> Toda pagina q lida com sessions deve ter a funcao (session_start()) <hr></h3>
 
 <?php
    
    session_start();

    // print_r($_SESSION);

    $_SESSION["nome"] = "Filipe";

?>

<!DOCTYPE html>
<html lang="en">
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

    <h2>Ola mundo</h2>
    
</body>
</html>

