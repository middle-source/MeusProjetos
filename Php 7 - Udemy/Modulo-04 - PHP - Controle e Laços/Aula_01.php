<?php
    $QualSuaIdade = 65;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if($QualSuaIdade < $idadeCrianca) {
        echo "Criança";
    } else if ($QualSuaIdade >= $idadeCrianca && $QualSuaIdade < $idadeMaior) {
        echo "Adolescente";
    } else if($QualSuaIdade >= $idadeMaior && $QualSuaIdade < $idadeMelhor) {
        echo "Adulto";
    } else {
        echo "Idoso";
    }

    echo "<br />";
    // OPERADOR TERNARIO
    echo "<br />";
    echo ($QualSuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";
?>