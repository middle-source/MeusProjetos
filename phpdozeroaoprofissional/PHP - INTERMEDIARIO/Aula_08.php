<?php
    $nome = "Allan Cristian";

    $x = explode(" ", $nome);

    print_r($x);

    echo "<br /> -------------------------------------------------------------------- <br />";

    $array = array("Allan", "Cristian");
    $nomecompleto = implode(" ", $array);
    echo $nomecompleto;

    echo "<br /> -------------------------------------------------------------------- <br />";

    $number = 8.2871872379;
    $number = 34989.12123;
    $x = number_format($number, 2, ",", "");
    echo $x;

    echo "<br /> -------------------------------------------------------------------- <br />";

        $texto = "O rato roeu a roupa !";

        $string = str_replace("roeu", "comeu", $texto);
        
        echo $string;
    
    echo "<br /> --------------------------------------------------------------------  <br />";

        $x = "ALLAN CRISTIAN";
        $x = strtolower($x);

        echo $x;
    
    echo "<br /> --------------------------------------------------------------------  <br />";

    $texto = "Allan";
    $x = substr($texto, 1, 4);
    echo $x;

    echo "<br /> --------------------------------------------------------------------  <br />";

    $texto = "allan";
    $texto = ucfirst($texto);
    echo $texto;

    echo "<br /> --------------------------------------------------------------------  <br />";

    $texto = "allan cristian cervantes";
    $texto = ucwords($texto);
    echo $texto;
?>