<?php
    class Carro{
        private $Modelo;
        private $Motor;
        private $Ano;

        public function getModelo(){
            return $this -> Modelo;
        }

        public function setModelo($Modelo) {
            $this -> Modelo = $Modelo;
        }

        public function getMotor() {
            return $this -> Motor;
        }

        public function setMotor($Motor) {
            $this -> Motor = $Motor;
        }

        public function getAno():int {
            return $this -> Ano;
        }

        public function setAno($Ano) {
            $this -> Ano = $Ano;
        }

        public function exibir() {
            return array(
                "modelo" => $this -> getModelo(),
                "motor" => $this -> getMotor(),
                "ano" => $this -> getAno()
            );
        }
        
    }



    $Gol = new Carro();
    $Gol -> setModelo("Gol GT");
    $Gol -> setMotor("V8");
    $Gol -> setAno(2017);
    var_dump($Gol -> exibir());


?>