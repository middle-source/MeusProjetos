<?php

/* EXEMPLO 01 */

    // // FOPEN = file Open

    // $filename = "logs";
    // $file = fopen($filename . DIRECTORY_SEPARATOR . "log.txt", "a+");

    // if(!is_dir($filename)) {
    //     mkdir($filename);
    // }

    // fwrite($file, date("Y-m-d H:i:s"). "\r\n");

    // fclose($file);

    // echo "Arquivo criado com sucesso ! ";
/* FIM EXEMPLO 01 */


/* EXEMPLO 02 */
        require_once('DAO/Conn.class.php');

        $sql = new Conn();
        $usuarios = $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin");

        $header = array();

        foreach($usuarios[0] as $key => $value) {
            array_push($header, ucfirst($key));
        }

        $file = fopen("logs/usuarios.csv", "w+");
        fwrite($file, implode(",", $header) . "\r\n");
        
        foreach($usuarios as $row) {
            $data = array();

            foreach($row as $key => $value) {
                array_push($data, $value);
            }

            fwrite($file, implode(",", $data) . "\r\n");
        } // END FOREACH DE LINHA
        
        fclose($file);

/* FIM EXEMPLO 01 */


    


?>