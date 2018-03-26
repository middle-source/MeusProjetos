<?php
    $nome = array(
        array("nome" => "Allan", "idade" => 20),
        array("nome" => "Cristian", "idade" => 29),
        array("nome" => "João", "idade" => 33),
        array("nome" => "Mateus", "idade" => 20)
    );

    foreach($nome as $alunos ) {
        echo "Aluno: " . $alunos["nome"] . " idade:" . $alunos["idade"] ."<br />";
    
    }


    echo "---------------------------------------------------------------------------------------- <br />";

    $alunos = array(
        "nome" => "Allan",
        "idade" => 80,
        "estado" => "PR",
        "pais" => "Brasil"
    );


    foreach($alunos as $dado => $dados){
        echo $dado . " = ". $dados . "<br />";
    }
?>