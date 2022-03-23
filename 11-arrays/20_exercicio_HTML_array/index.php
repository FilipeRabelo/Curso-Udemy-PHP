<?php

    $pessoas = [

      "Filipe" => 32,
      "Giulia" => 6,
      "Rafael" => 4,
      "Daniela" => 44,

    ];

?>

<table border="1px">

    <tr>
        <th>Nome:</th>
        <th>Idade:</th>
    </tr>

    <?php foreach($pessoas as $nome => $idade): ?>   <!-- IMPRESSAO RAPIDO COM PHP -->

        <tr>
            <td><?= $nome; ?></td>  <!-- IMPRESSAO RAPIDO COM PHP -->
            <td><?= $idade; ?></td> <!-- IMPRESSAO RAPIDO COM PHP -->
        </tr>

    <?php endforeach; ?>   <!-- IMPRESSAO RAPIDO COM PHP -->

</table>

