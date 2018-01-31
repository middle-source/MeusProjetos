<?php

    class Documento {
        private $Numero;
        

        public function getNumero() {
            return $this -> Numero;
        }

        public function setNumero($Numero) {
            $this -> Numero = $Numero;
        }
    }


    $Cpf = new Documento();
    $Cpf -> setNumero("09492594978");

    var_dump($Cpf -> getNumero());
?>
