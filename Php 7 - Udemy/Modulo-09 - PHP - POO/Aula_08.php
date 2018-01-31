<?php

    interface Veiculo {
        public function acelerar($Velocidade);
        public function freiar($Velocidade);
        public function trocarMarcha($Marcha);
    }


    class Civic implements Veiculo {
        public $Velocidade;
        public $Marcha;


        public function acelerar($Velocidade) {
            echo "O veiculo acelerou até ". $Velocidade . " km/h";
        }

        public function freiar($Velocidade) {
            echo "O Veiculo frenou até " . $Velocidade . " km/h";
        }

        public function trocarMarcha($Marcha) {
            echo "O veiculo Trocou de Marcha " . $Marcha;
        }
    }


    $obj = new Civic;
    $obj -> trocarMarcha(1);
?>