<?php

try{


    $Conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSSQLSERVER26;ConnectionPooling=0", "nowdb", "123456");

    $stmt = $Conn -> prepare("SELECT * FROM tb_usuarios ORDER BY desuser");
    $stmt -> execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
} catch(PDOException $e){
    echo $e -> getMessage();
}

?>