<?php
    session_start();
    // $_SESSION["nome"] = "Allan Cristian"; // CRIAR UMA SESSION
    // echo "Meu nome é ". $_SESSION["nome"];




    setcookie("meunome", "Fulano de tal", time() + 3600); // SETANDO COOKIE PARAM 1 = NOME COOKIE, PARAM 2 = ESPECIFICAÇÃO COOKIE, PARAM 3 = TIME COOKIE 
    echo "Cookie setado é de " . $_COOKIE['meunome']; // MOSTRANDO COOKIE

    
?>