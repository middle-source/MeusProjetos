  <?php
    $conecta = mysqli_connect("localhost","root","admin","curso_php_ajax");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = utf8_decode($_POST["nometransportadora"]);
        $endereco   = utf8_decode($_POST["endereco"]);
        $cidade     = utf8_decode($_POST["cidade"]);
        $estado     = $_POST["estados"];
        
        $inserir    = "INSERT INTO transportadoras ";
        $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$nome','$endereco','$cidade', $estado)";        

        $retorno = array();
        $operacao_insert = mysqli_query($conecta, $inserir);
        
        if($operacao_insert) {
            $retorno['sucesso'] = true;
            $retorno['mensagem'] = "Transportadora inserida com sucesso ! ";
        } else {
            $retorno['sucesso'] = false;
            $retorno['mensagem'] = "Falha no sistema fale com Allan ! ";
        }

        echo json_encode($retorno);
    }
?>