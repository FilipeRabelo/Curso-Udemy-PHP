<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceitos basico -PHP</title>
    <style>
        body {
            background: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    echo 'Hello World';

    echo '<hr>';

    $nome = 'Filipe';
    echo $nome;

    echo "<hr>";

    if (5 > 3) {
        echo "Dentro do if";
    }

    echo "<hr>";

    ?>

    <?php   // Construind objeto como construct // ESTUDOS

    class Casa {

        public $sala;
        public $cozinha;
        public $banheiro;
        public $quartos;


        public function __construct($sala, $cozinha, $banheiro, $quartos){

            $this->sala = $sala;
            $this->cozinha = $cozinha;
            $this->banheiro = $banheiro;
            $this->quartos = $quartos;
        }

        public function Mostrar_casa(){
            echo "Essa casa possui uma $this->sala, $this->cozinha, $this->banheiro e $this->quartos";
        }

    }

    $Casa_4201 = new Casa("Sala ampla", "Cozinha espaçosa", "2 Banheiros", " 3 quartos");

    $Casa_4201->Mostrar_casa();

    echo "<hr>";

    $casa_4455 = new Casa("2 Salas", "cozinha arejada", "1 Banheiro", "4 Quartos");

    $casa_4455->Mostrar_casa();




    ?>


</body>

</html>