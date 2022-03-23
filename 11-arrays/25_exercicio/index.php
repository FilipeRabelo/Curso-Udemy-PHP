<?php

    $ranking = [

        "Filipe" => 35,
        "Giulia" => 87,
        "Rafael" => 18,
        "Daniela" => 15,
        "Monica" => 1001

    ];

    arsort($ranking);  // colocando em ordem crescente //

?>

<div style="border: 1px solid red; background-color: aqua; padding: 20px; margin: 20px ">

    <h3 style="text-align: center; ">Ranking</h3>

    <ol>
        <?php foreach($ranking as $nome => $pontos): ?>
        
                <li><?= "Participante: " . $nome . ", sua pontuação é: " . $pontos; ?></li>        

        <?php endforeach; ?>
    </ol>

</div>