<h3>$_SERVER / Variavel de Ambiente ou global</h3> <br>

<p>
    <span>SERVER_SOFTWARE: </span> identificação do SERVIDOR; <br>
    (Qual software esta rodando nesse servidor)
</p>

<p>
    <span>SERVE_NAME: </span>Hostname, DNS ou IP do SERVIDOR;
</p>

<p>
    <span>SERVER_PROTOCOL: </span>Protocolo do SERVIDOR
</p>

<p>
    <span>SERVE_PORT: </span>Porta do SERVIDOR; porta 80 normalmente (APACHE)
</p>

<p>
    <span>QUERY_STRING: </span> (CADEIA DE CONSULTA) <br>
     Argumento após o ? na URL;
</p>

TUDO Q ESTA NO SERVE EU POSSO USAR PARA INDICAR UM CAMINHOPARAO USUARIO



<?php

    print_r($_SERVER);

    echo "<hr>";

    echo $_SERVER["MYSQL_HOME"] . "<br>";

    if($_SERVER['SERVER_NAME'] == 'localhost'){

        echo "Esta acessando o localhost <br>";

    }