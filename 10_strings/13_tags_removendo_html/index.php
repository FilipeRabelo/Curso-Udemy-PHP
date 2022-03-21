<?php

    echo "Podemos remover as tags de HTML de uma string com a funcao: <br>
    strip_tags; <br>
    Geralmente para salvar dados no banco de daos removemos as tags!
    ";


    $texto_HTML = "<p> Testando paragrafo </p> <div> Uma div </div> <p> Outro paragrafo </p>";

        echo $texto_HTML;

    $salvar_texto_banco = strip_tags($texto_HTML);

        echo $salvar_texto_banco;
