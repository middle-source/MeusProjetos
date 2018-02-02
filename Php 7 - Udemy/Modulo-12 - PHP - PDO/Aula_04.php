<?php

    $Conn = new PDO('mysql:host=127.0.0.1:3306;dbname=curso_hcode', "root", "admin");

    $stmt = $Conn -> prepare("UPDATE tb_usuarios SET deslogin = :login_user, dessenha = :login_senha WHERE id_usuario = :id_user");
    
    $Id = "2";
    $Login = "vivo";
    $Senha = "52145";

    $stmt -> bindParam(":login_user", $Login);
    $stmt -> bindParam(":login_senha", $Senha);
    $stmt -> bindParam(":id_user", $Id);


    $stmt -> execute();
    echo "Alterado OK";


?>