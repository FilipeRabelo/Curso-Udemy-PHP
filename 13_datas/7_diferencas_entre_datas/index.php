<?php

echo "Podemos calcular a duferenca entre duas datas com o metodo DIFF<br>
    O resultado pode ser formatado com FORMAT <br>
    ex: $ diferenca = $ dateA->diff($ dateB); <hr>
    ";

$data1 = new DateTime();

$data2 = new DateTime();

$data2->setDate(2001, 10, 15);

print_r($data1);
echo "<hr>";
print_r($data2);
echo "<hr>";

$diferenca = $data1->diff($data2);
print_r($diferenca);
echo "<hr>";

//diferenca de dias//
echo $diferenca->format("%a days");
echo "<br>";
