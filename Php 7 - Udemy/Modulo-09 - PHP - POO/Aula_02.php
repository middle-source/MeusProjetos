<?php

    /* Nome de Classes tem Padrão CameCase */
    class PrimeiraClasse{
        public $Nome; // Atributo

        public function Falar() { // Metodo
            return "O meu nome é " . $this -> Nome;
        }
    }


    $Obj = new PrimeiraClasse();
    $Obj -> Nome = "Allan Cristian";
    echo $Obj -> Falar();
    
?>