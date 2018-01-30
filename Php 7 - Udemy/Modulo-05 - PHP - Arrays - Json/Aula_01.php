<?php
    // VETOR
    $Frutas = array("Laranja", "Abacaxi", "Melancia");
    var_dump($Frutas);
    
    echo "<br />";
    // ARRAY BIDIMENSIONAL
    echo "<br />";

    $Car[0][0] = "GM";
    $Car[0][1] = "Cobalt";
    $Car[0][2] = "Onix";
    $Car[0][3] = "Camaro";

    $Car[1][0] = "Ford";
    $Car[1][1] = "Fiesta";
    $Car[1][2] = "Fusion";
    $Car[1][3] = "Eco Sport";

    echo $Car[0][3];
    echo "<br />";
    echo end($Car[1]);

    // TRATAMENTO DE ARRAY
        $People = array();
        array_push($People, array(
            'Nome' => "Allan",
            'Idade' => 20
        ));

?>