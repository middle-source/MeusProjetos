<?php

    $Conn = new PDO("mysql:dbname=curso_hcode;host=localhost:3306", "root", "admin");

    $stmt = $Conn -> prepare("SELECT * FROM tb_usuarios ORDER BY id_usuario");
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
    // var_dump($result);

    foreach($result as $row) {
        foreach($row as $key => $value) {
            echo "<strong>" . $key . ": </strong>" . $value . "<br />"; 
        }

        echo "======================================================== <br />"; 
    }


?>