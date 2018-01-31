<?php
    class Endereco {
        private $Logradouro;
        private $Numero;
        private $Cidade;

        public function __construct($Logradouro, $Numero, $Cidade) {
            $this -> Logradouro = $Logradouro;
            $this -> Numero = $Numero;
            $this -> Cidade = $Cidade;
        }

        public function __destruct() {
            var_dump("DESTRUIR");
        }

        public function __toString() {
            return $this -> Logradouro . ", " . $this -> Numero . ", " . $this -> Cidade . ". ";
        }
    }



    $meuEndereco = new Endereco("Rua Professor Eduardo Correa Lima", 236, "Curitiba");
    // var_dump($meuEndereco);
    // unset($meuEndereco);


    echo $meuEndereco;

?>