<?php

    $Conn = new PDO("mysql:host=localhost:3306;dbname=curso_hcode", "root", "admin");
    $stmt = $Conn -> prepare("DELETE FROM tb_usuarios WHERE id_usuario = :id");
    $id = 5;
    $stmt -> bindParam(":id", $id);
    $stmt -> execute();


    echo "Deletado com sucesso ! Id: ".$id;
?>