<?php
// 01/01/1970 Timestamp
    echo date('d/m/Y') . "<br />";
    echo time() . "<br />";
    echo "<br /> -------------------------- <br />";

    $Time = strtotime("2001-09-11");
    $Time = strtotime("now");
    $Time = strtotime("+1 week");

    echo date("l, d/m/Y", $Time);
?>