<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variavel static - PHP</title>
    <style>
        body {
            background-color: aquamarine;
            text-align: center;

        }
    </style>
</head>

<body>
        <h3>variavel static</h3>
        <?php
            
            function teste(){

                $a = 0;
                $a++;

                echo "$a <br> ";

            }

            teste();
            teste();
            teste();
            teste();
            teste();
            teste();

            echo "<hr>";

            function teste_static(){

                static $a = 0;
                $a++;

                echo "$a <br>";

            }

            teste_static();
            teste_static();
            teste_static();
            teste_static();

           
            


        ?>

</body>

</html>