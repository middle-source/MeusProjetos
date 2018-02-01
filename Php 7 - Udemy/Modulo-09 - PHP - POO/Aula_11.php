<?php

    function __autoload($nomeClasse) {
        require_once("./class/" . $nomeClasse . ".class.php");
    }


    $Carro = new DelRay;
    $Carro -> Acelerar(200);
?>