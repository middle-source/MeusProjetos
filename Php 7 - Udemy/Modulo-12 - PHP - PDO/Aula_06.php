<?php

    $Conn = new PDO("mysql:host=127.0.0.1:3306;dbname=curso_hcode", "root", "admin");
    
    $Conn -> beginTransaction();
    
    
    
    $stmt = $Conn -> prepare('DELETE FROM tb_usuarios WHERE id_usuario = ?');

    $id_user = 3;
    // $stmt -> bindParam(":id", $id_user);
    
    
    $stmt -> execute(array($id_user));

   //  $Conn -> rollback();
   
   $Conn -> commit();
   
   echo "Deletado OK";


?>