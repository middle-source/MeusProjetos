<?php

    function Soma(int ... $Valores):float{
        return array_sum($Valores);
    }


    echo soma(2, 2) . "<br />";
    echo soma(2, 7) . "<br />";
    echo soma(2.5, 7.9) . "<br />";

    // var_dump(soma(2, 2));

?>

