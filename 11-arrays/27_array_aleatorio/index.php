<?php

echo "Funcao shuffle podemos reorganizar os itens em ordem aleatoria (tudo trocado de lugar),<br>
    passamos apenas o array cmomo parametro.<hr>";

$arr = range(1, 20);

shuffle($arr);

print_r($arr);
