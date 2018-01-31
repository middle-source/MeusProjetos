<?php

    class Document {
        private $Numero;

        public function getNumero() {
            return $this -> Numero;
        }

        public function setNumero($Numero) {
            $this -> Numero = $Numero;
        }
    }


    class CPF extends Document {
        public function Validar():bool {
            $NumeroCPF = $this -> getNumero();
            
            // Aqui Validação do CPF
            return true;
        }
    }


    $Doc = new CPF();
    $Doc -> setNumero("09492594978");
    var_dump($Doc -> Validar());
    echo "<br />";
    echo $Doc -> getNumero();
?>