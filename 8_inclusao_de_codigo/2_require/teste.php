<h1>Testando o include</h1>

<?php

    $c = 5;

    for($c = $c; $c <= 10; $c++){
        echo "Imprimindo $c <br>";

        if($c == 9){
            echo "Filipe <br>";
        }
    }

?>

<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat saepe iure nobis blanditiis asperiores optio totam
    ducimus enim laborum deserunt ipsum a maxime, nam in,
    alias minima repudiandae dolor officiis velit sed rerum? Nemo quam assumenda ea
    perspiciatis temporibus suscipit! Nihil perferendis id minus assumenda libero odio cum,
    maxime adipisci.
</p>

<div>

    <input 
        class="input"
        type="text" 
        id="nome" 
        name="nome" 
        placeholder="Digite seu texto"
    >
    <br>

    <input 
        class="input"
        type="submit" 
        value="Enviar"
    >
    <br>
    
    <textarea name="nome" id="nome" cols="30" rows="10">Digite aqui seu texto</textarea>

</div>