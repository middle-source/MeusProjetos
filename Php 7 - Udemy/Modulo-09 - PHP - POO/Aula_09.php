<?php

    interface Veiculo {
        public function Acelerar($Velocidade);
        public function Frenar($Velocidade);
        public function trocarMarcha($Marcha);
    }


    abstract class Automovel implements Veiculo {
        public function Acelerar($Velocidade) {
            echo "O veiculo acelerou até " . $Velocidade . " km/h";
        }

        public function Frenar($Velocidade) {
            echo "O veiculo Frenou " . $Velocidade . " km/h";
        }

        public function trocarMarcha($Marcha) {
            echo "Foi trocado marcha para  " . $Marcha;
        }
    }

    class DelRay extends Automovel {
        public function empurrar() {

        }
    }


     $obj = new DelRay();
   // $obj = new Automovel();
    
    $obj -> Acelerar(200);
?>