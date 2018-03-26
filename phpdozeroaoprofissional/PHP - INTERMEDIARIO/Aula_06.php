<?php

    // HORA APARTIR DO 1/01/1970 00:00 devido a criação do UNIX

        $x = time();
        echo $x;

        echo "<br /> --------------------------------------------------------- <br />";

        // $y = mktime();

        $dataproxima = date('d/m/Y', strtotime("10+ days"));
        echo $dataproxima;

?>