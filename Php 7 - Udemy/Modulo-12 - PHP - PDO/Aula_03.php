<?php

    $Conn = new PDO('mysql:host=localhost:3306;dbname=curso_hcode', 'root', 'admin');
    $stmt = $Conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:login_user , :login_pass)");
    $Login = "Cristian";
    $Password = "263145";


    $stmt -> bindParam(":login_user", $Login);
    $stmt -> bindParam(":login_pass", $Password);


    $stmt -> execute();

    echo "Inserido com sucesso !";
?>