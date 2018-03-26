<?php
    $array = array(
        "nome" => "Allan",
        "idade" => 20,
        "cidade" => "Curitiba",
        "pais" => "Brasil"
    );

    $array2 = array_keys($array); // MOSTRA INDICES DO ARRAY

    print_r($array2);

    echo "<br /> --------------------------------------------------------------------  <br />";

    $array2 = array_values($array); // MOSTRA VALORES DE ARRAY
    print_r($array2);

    echo "<br /> --------------------------------------------------------------------  <br />";

    array_pop($array); // REMOVE ULTIMO ITEM DO ARRAY
    // array_pop($array); // REMOVE ULTIMO ITEM DO ARRAY
    

    print_r($array);

    echo "<br /> --------------------------------------------------------------------  <br />";
    
     array_shift($array); // REMOVE O PRIMEIRO ITEM DO ARRAY
    print_r($array);

    echo "<br /> --------------------------------------------------------------------  <br />";

    asort($array);
    print_r($array);

    echo "<br /> --------------------------------------------------------------------  <br />";

    $array = array(
        "Allan",
        "Matheus",
        "João",
        "Jeniffer",
        "Paula"
    );

    if(in_array("Allan", $array)) {
        echo "Vencedor foi Allan !";
    }

?>