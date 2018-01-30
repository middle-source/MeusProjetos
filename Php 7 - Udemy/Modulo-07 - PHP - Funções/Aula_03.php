<?php

/*
    function trocaValor(&$a) = &$a -> Passagem de parametro por referencia
*/


    $a = 10;

    function trocaValor(&$a) {
        $a += 50;
        return $a;
    }

    echo trocaValor($a);
    echo "<br />";

    echo $a;

    echo "<br /> ----------------------------------------------------------------- <br />";

    $Pessoa = array(
        'nome' => 'Allan',
        'idade' => 20
    );

    foreach($Pessoa as &$Value) {
        if(gettype($Value) === 'integer') $Value += 10;
        echo $Value . "<br />"; 
    }

    print_r($Pessoa);

?>

