<?php

echo "Metodos que nos ajudam a entender as  classes<br>
    
    class_exists() => Verifica se uma classe existe --> if(){}   <br>
    
    get_class_vars() => Mapeamento das propriedades de uma classe -->  print_r('classe')   <br>

    get_class_methods() => Verificaos metodos de uma classe -->  print_r('classe')  <hr>";
    
    
   


    class Humano {

        public $idade;
        public $nome;
        public $profissao = "Programador";


        public function Falar(){

        }

        public function Andar(){

        }

    }


    if(class_exists("Humano")){
        echo "A classe Humano existe<br>";
    }else{
        echo "A classe Humano nao existe<br>";
    }

    if(class_exists("Carro")){
        echo "A classe Carro existe";
    }else{
        echo "A classe Carro nao existe<br>";
    }

    ///////////////////////

    echo "<hr>";

    print_r(get_class_vars("Humano"));

    echo "<hr>";
   
    print_r(get_class_methods("Humano"));

