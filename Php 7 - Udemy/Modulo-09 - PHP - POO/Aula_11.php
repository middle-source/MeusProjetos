<?php

    function __autoload($nomeClasse) {
        require_once("./class/" . $nomeClasse . ".class.php");
    }


    $Carro = new DelRay;
    $Carro -> Acelerar(200);

    echo "<br />";
/* ------------------------------ */

function incluirClasses($nomeClasse) {
    if(file_exists("." . DIRECTORY_SEPARATOR . "class". DIRECTORY_SEPARATOR . $nomeClasse . ".class.php" ) == true ) {
        require_once(".". DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . $nomeClasse . ".class.php");
    }
}

spl_autoload_register("incluirClasses");

$Carro2 = new DelRay();
$Carro2 -> Acelerar(290);

?>