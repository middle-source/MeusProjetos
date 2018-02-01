<?php

    require_once('config.php');

    use Cliente\Cadastro;

    $obj = new Cadastro();
    $obj -> setNome("Allan Cristian");
    $obj -> setEmail("allan.cristian@outlook.com.br");
    $obj -> setSenha("123456");

    $obj -> registrarVenda() ;

?>