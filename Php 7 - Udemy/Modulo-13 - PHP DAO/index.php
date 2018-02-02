<?php
    require_once('config.php');

    // $Conn = new Conn;
    // $usuarios = $Conn -> select("SELECT * FROM tb_usuarios");

    // echo json_encode($usuarios);

    $usuario = new Usuario();
    $usuario -> loadById(7);

    echo $usuario;
?>