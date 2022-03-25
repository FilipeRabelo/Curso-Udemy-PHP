    <h3>METODOS HTTP</h3>

    <h5>As requisições que enviamos tambem contem metodos, alguns deles são:</h5>
    <p>
        <span>GET:</span> Solicita a apresentação de um recurso ( ex: Visualização de uma página);
    </p>
    <p>
        <span>POST:</span> Envio de dados ao servidor (EX: cadastro de usuário);
    </p>
    <p>
        <span>PUT:</span> Atualização de dados;
    </p>
    <p>
        <span>DELETE: </span> Remoção de dados;
    </p>
    <p>
        <span>PATCH: </span> Atualização de dado específico;
    </p>

    <?php

        class cao{

            public $nome;
            public $idade;
            public $raca;

            public function __construct($nome, $idade, $raca){

                $this->nome = $nome;
                $this->idade = $idade;
                $this->raca = $raca;

            }

            public function Mostrar_cachorro(){

                echo "Eu tinha um cachorro que se chamava $this->nome, ele tinha $this->idade anos de vida,
                e era da raca $this->raca. <br> ";

            }

        }

        $Thor = new cao("Thor", 4, "Pit-bull");

        $Thor->Mostrar_cachorro();



        echo "<hr>";

        class Livro{

            public $nome;
            public $capa;
            public $preco;
            public $autor;

            public function __construct($nome, $capa, $preco, $autor) {
                
                $this->nome = $nome;
                $this->capa = $capa;
                $this->preco = $preco;
                $this->autor = $autor;
                
            }

            public function Mostrar_livro(){

                echo "O livro $this->nome possui uma capa $this->capa, custa $this->preco e foi escrito por
                $this->autor em 2022.";

            }

        }

        $php = new Livro("PHP e suas Magias", "dura", 198.99, "Filipe Rabelo");

        $php->Mostrar_livro();

        echo "<hr>";

        $HTML5_CSS3 = new Livro("Aprendendo HTML5 e CSS3", "Dura", 188.55, "Filipe Rabelo");

        $HTML5_CSS3->Mostrar_livro() . "<br>";

      

        if($HTML5_CSS3->nome == "Aprendendo HTML5 e CSS3" && $HTML5_CSS3->autor == "Filipe Rabelo"){
            echo "Pode comprar";
        }
 
