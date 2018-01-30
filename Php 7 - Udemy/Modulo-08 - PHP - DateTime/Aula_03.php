<?php
    $dt = new DateTime();
    echo $dt -> format("d/m/Y H:i:s");

    echo "<br /> ------------------------------------------- <br />";

    $periodo = new DateInterval("P95D");
    echo $dt -> format("d/m/Y H:i:s");

    $dt -> add($periodo);
    echo "<br />";
    echo $dt -> format("d/m/Y H:i:s");
?>