<?php

    function teste($CallBack) {
        // Processo Lento
        $CallBack();
    }


    teste(function(){
        echo "Terminou";
    });


    echo "<br /> ------------------------------------------------ <br />";
    $Fn = function($a){
        var_dump($a);
    };

    $Fn("Oi");
?>