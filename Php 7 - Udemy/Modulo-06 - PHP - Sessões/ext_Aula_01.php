<?php
    session_start();
    // session_unset($_SESSION['nome']); // Limpar Variaveis de Sessão
    // session_destroy(); // Destroy Variavel de sessão
    echo $_SESSION['nome'];


?>