<?php
    require_once('config.php');

    // $Conn = new Conn;
    // $usuarios = $Conn -> select("SELECT * FROM tb_usuarios");

    // echo json_encode($usuarios);

    /* Carrega um usuario */
        // $usuario = new Usuario();
        // $usuario -> loadById(7);

        // echo $usuario;
    /* FIM Carrega um usuario */

    /* Carrega uma lista de Usuario */
        // $Lista = Usuario::getList();
        // echo json_encode($Lista);
    /* Carrega uma lista de Usuario */

    /* Carrega uma lista de usuarios buscando pelo Login */
        // $Search = Usuario::search("g005");
        // echo json_encode($Search);
    /* FIM Carrega uma lista de usuarios buscando pelo Login */

    /* Verifica Usuario e senha */
        $usuario = new Usuario();
        $usuario -> Login("g0055968", "g0055968");
        echo $usuario;
    /* Fim Verifica Usuario e senha */
?>