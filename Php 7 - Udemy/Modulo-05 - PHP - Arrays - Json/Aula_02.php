<?php
    $Pessoas = array();

    array_push($Pessoas, array(
        'Nome' => "Allan Cristian",
        'Idade' => 22
    ));

    array_push($Pessoas, array(
        'Nome' => "Jeniffer Kuster",
        'Idade' => 19
    ));

    // print_r($Pessoas[0]['Nome']);

    echo json_encode($Pessoas);

    
?>