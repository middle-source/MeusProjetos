<?php

    class Usuario {
        /* Atributos */
            private $idUsuario;
            private $desLogin;
            private $desSenha;
            private $dtCadastro;
        /* Fim Atributos */
        
        /* Getters e Setters do idUsuario */

            public function getIdusuario() {
                return $this -> idUsuario;
            }
        
            public function setIdusuario($idUsuario) {
                $this -> idUsuario = $idUsuario;
            }

        /* Fim Getters e Setters do idUsuario */

        /* Getters e Setters do desLogin */

            public function getDeslogin() {
                return $this -> desLogin;
            }
            public function setDeslogin($desLogin) {
                $this -> desLogin = $desLogin;
            }

        /* Fim Getters e Setters do desLogin */

        /* Getters e Setters do desSenha */
            public function getDessenha() {
                return $this -> desSenha;
            }
            public function setDessenha($desSenha) {
                $this -> desSenha = $desSenha;
            }
        /* Fim Getters e Setters do desSenha */

        /* Getters e Setters do dtCadastro */

            public function getDtcadastro() {
                return $this -> dtCadastro;
            }

            public function setDtcadastro($dtCadastro) {
                $this -> dtCadastro = $dtCadastro;
            }
        /* Fim Getters e Setters do dtCadastro */

    public function loadById($id) {
        $sql = new Conn();
        $results = $sql -> select("SELECT * FROM tb_usuarios WHERE id_usuario = :id", array(
            ':id' => $id
        ));


        if(count($results) > 0) {
            $row = $results[0];
            $this -> setIdusuario($row['id_usuario']);
            $this -> setDeslogin($row['deslogin']);
            $this -> setDessenha($row['dessenha']);
            $this -> setDtcadastro($row['dtcadastro']);
        }
    }


    public function __toString() {
        try{
            
            return json_encode(array(
                "id_usuario" => $this -> getIdusuario(),
                "deslogin" => $this -> getDeslogin(),
                "dessenha" => $this -> getDessenha(),
                "dtcadastro" => $this -> getDtcadastro()
            ));

        } catch(Exception $e) {
            return 'Exceção capturada: '. $e -> getMessage() ;
        }
    }

            
    
    
    
    
    }


?>