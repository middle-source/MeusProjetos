<?php

    
    /* EXEMPLO 01 */
        /* $name = "img"; */
        /* Verificando se um diretorio existe e criando o mesmo */
        
            // if(!is_dir($name)) {
            //     mkdir($name);
            //     echo "Diretorio {$name} Criado com sucesso ! ";
            // } else {
            //    // echo "Diretorio {$name} já existe ! ";
            //     rmdir($name);
            //     echo "Já existe diretorio {$name} e já foi removido ! ";
            // }



        /* Fim Verificando se um diretorio existe e criando o mesmo */
    /* FIM EXEMPLO 01 */

    /* EXEMPLO 02 */
        $images = scandir("img");
       $data = array();
        foreach ($images as $key) {
            if(!in_array($key, array(".", ".."))) {
                $filename = "img" . DIRECTORY_SEPARATOR . $key;
                $info = pathinfo($filename);
                $info["size"] = filesize($filename);
                $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
                $info["url"] = "https://localhost/cursos/Php%207%20-%20Udemy/Modulo-14%20-%20PHP%20-%20ARQUIVOS/";
                array_push($data, $info);
            }
        }
       
        // var_dump($images);
echo json_encode($data);

    /* FIM EXEMPLO 02 */

?>