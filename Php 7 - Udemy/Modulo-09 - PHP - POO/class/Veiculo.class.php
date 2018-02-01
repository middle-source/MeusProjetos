<?php
    interface Veiculo{
        public function Acelerar( $velocidade );
        public function Frenar ( $velocidade );
        public function trocarMarcha( $marcha );
    }

?>