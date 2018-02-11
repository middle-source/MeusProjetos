<?php
    // Config Geral 
    header('Access-Control-Allow-Origin:*');
    // Abrir Conexão
    $Conn = mysqli_connect("localhost:3306", "root", "admin", "curso_php_ajax");


    $select = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($Conn, $select);

    $retorno = array();

    while($row = mysqli_fetch_object($produtos)) {
       $retorno[] = $row;
    } 

    echo json_encode($retorno);

    // fechar Conexão
    mysqli_close($Conn);

?>