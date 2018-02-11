<?php
// Preparar o arquivo para callback
$callback = isset($_GET['callback']) ? $_GET['callback'] : false; 

    $Conn = mysqli_connect('localhost:3306', 'root', 'admin', 'curso_php_ajax');

    $select = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";

    $produtos = mysqli_query($Conn, $select);

    $retorno = array();

    while($row = mysqli_fetch_object($produtos)) {
        $retorno[] = $row;
    }

    echo ($callback ? $callback . '(' : '') . json_encode($retorno) . ($callback ?  ')' : '');

    mysqli_close($Conn);

?>