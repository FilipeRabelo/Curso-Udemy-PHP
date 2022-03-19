<?php

$nome = "Filipe";
$sobre_nome = "Rabelo";

?>

<form action="">

    <div>
        <label for="">Digite seu nome:</label>
        <input type="text" value="<?= $nome; ?>">
    </div>

    <div>
        <label for="">Digite seu sobre nome:</label>
        <input type="text" value="<?= $sobre_nome; ?>">
    </div>

    <div>
        <input type="submit" value="Enviar">
    </div>

</form>