<?php
    class Pessoa {
        public $Nome = "Rasmus Lerdorf";
        protected $Idade = 48;
        private $Senha = "123456";


        public function verDados() {
            echo $this -> Nome . "<br />";
            echo $this -> Idade . "<br />";
            echo $this -> Senha . "<br />";
        }
    }


    class Programador extends Pessoa{
        
        public function verDados() {
            echo get_class($this) . "<br />";
            echo $this -> Nome . "<br />";
            echo $this -> Idade . "<br />";
            echo $this -> Senha . "<br />";
        }
    }


   //  $Pessoas = new Pessoa; // Transformando minha Classe em Objeto
    // echo $Pessoas -> Nome; // public pode ser acessado por todas as classes. (Telefone Publico -> Todos podem ter acesso )
    // echo $Pessoas -> Idade; // protected somente Propria Classe ou Classe Filha. (Telefone Fixo -> Somente eu e minha familia)
    // echo $Pessoas -> Senha; // private somente é acessado pela Propria Classe. (Meu Celular -> Somente EU tenho acesso )

    // $Pessoas -> verDados();

    $Objeto = new Programador();
    $Objeto -> verDados();
?>