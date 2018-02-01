<?php

/* Exemplo 01 ------------------------------------INSERT------------ */
    
    // $conn = new mysqli("127.0.0.1:3306", "root", "admin", "curso_hcode");


    // if($conn -> connect_error) {
    //     echo "Error: " . $conn -> connect_error;
    // }


    // // Preparando Comando para o Banco de Dados
    // $stmt = $conn -> prepare(" INSERT INTO tb_usuarios( deslogin, dessenha) VALUES(?, ?)");
    // $stmt -> bind_param("ss", $login, $pass );

    // $login = "g0055968";
    // $pass = "51123699";
    // // Executando Comando no Banco de dados
    // $stmt -> execute();

    // $login = "root";
    // $pass = "!2dad";

    // $stmt -> execute();

/* Exemplo 02 -----------------------------------SELECT------------- */


        $Conn = new mysqli("localhost:3306", "root", "admin", "curso_hcode");

        if($Conn -> connect_error){
            echo "Error: " . $Conn -> connect_error;
        }

        $result = $Conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

        $data = array();

        while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
            array_push($data, $row);
        }

        echo json_encode($data);
?>