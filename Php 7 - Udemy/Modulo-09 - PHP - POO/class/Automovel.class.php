<?php
    interface Veiculo{
        public function Acelerar( $velocidade );
        public function Frenar ( $velocidade );
        public function trocarMarcha( $marcha );
    }

    
    abstract class Automovel implements Veiculo {
        public function Acelerar( $velocidade ) {
            echo "O Veiculo acelerou até " . $velocidade . " km/h";
        }

        public function Frenar( $velocidade ) {
            echo "O Veiculo Frenou até " . $velocidade . " km/h";
        }

        public function trocarMarcha( $marcha ) {
            echo "O veiculo engatou a marcha " . $marcha;
        }
    }


?>