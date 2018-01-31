<?php
    // Polimorfismo -> Metodos com mesmo nome e herança tem comportamento diferente

    abstract class Animal {
        public function Falar() {
            return "Som";
        }

        public function Mover() {
            return "Anda";
        }
    }


    class Cachorro extends Animal{
        public function Falar() {
            return "Late";
        }
    }


    class Gato extends Animal{
        public function Falar() {
            return "Miar";
        }
    }

    class Passaro extends Animal{
        public function Falar() {
            return "Canta";
        }

        public function Mover() {
            return "Voa e " . parent::Mover();
        }
    }

    $Pluto = new Cachorro();
    echo $Pluto -> Falar() . "<br />";
    echo $Pluto -> Mover() . "<br />";

    $Garfield = new Gato();
    echo $Garfield -> Falar() . "<br />";
    echo $Garfield -> Mover() . "<br />";

    $Passaro = new Passaro();
    echo $Passaro -> Falar() . "<br />";
    echo $Passaro -> Mover() . "<br />";

?>