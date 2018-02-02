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
                return $this -> dessenha;
            }
            public function setDessenha($desSenha) {
                $this -> dessenha = $desSenha;
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
        
    /* Exibir apenas um Id */

        public function loadById($id) {
            $sql = new Conn();
            $results = $sql -> select("SELECT * FROM tb_usuarios WHERE id_usuario = :id", array(
                ':id' => $id
            ));


            if(count($results) > 0) {
                // $row = $results[0];
                // $this -> setIdusuario($row['id_usuario']);
                // $this -> setDeslogin($row['deslogin']);
                // $this -> setDessenha($row['dessenha']);
                // $this -> setDtcadastro($row['dtcadastro']);
                $this -> setData($results[0]);
            }
        }

    /* Fim Exibir apenas um Id */

    /* Exibir uma lista de usuarios */
        
        public static function getList() {
            $Conn = new Conn();
            return $Conn -> select("SELECT * FROM tb_usuarios ORDER BY deslogin");
        }

    /* Fim uma lista de usuarios */
    
    /* Buscar Usuarios */
        public static function search($Login) {
            $Conn = new Conn();
            return $Conn -> select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :search ORDER BY deslogin", array(
                ":search" => "%". $Login ."%"
            ));
        }
    /* FIM Buscar Usuarios */

    
    /* Autenticar Login */
        public function login($Login, $password) {
            $Conn = new Conn();
            $results = $Conn -> select ("SELECT * FROM tb_usuarios WHERE deslogin = :login_name AND dessenha = :login_password", array(
                ":login_name" => $Login,
                ":login_password" => $password
            ));

            if(count($results) > 0) {
                $this -> setData($results[0]);
            } else {
                throw new Exception ("Login e/ou senha invalidos. ");
            }
        }
    /* FIM Autenticar Login */

    /* Setar Dados */
        public function setData($data) {
            $this -> setIdusuario($data['id_usuario']);
            $this -> setDeslogin($data['deslogin']);
            $this -> setDessenha($data['dessenha']);
            $this -> setDtcadastro(new DateTime($data['dtcadastro']));
        }

    /* Fim Setar Dados */

    /* Inserir Dados no Banco */
        public function insert() {
            $Conn = new Conn();
            $results = $Conn -> select("CALL sp_usuarios_insert(:login_name, :login_password)", array(
                ":login_name" => $this -> getDeslogin(),
                ":login_password" => $this -> getDessenha()
            ));

            if(count($results) > 0) {
                $this -> setData($results[0]);
            }
        }
    /* Fim Inserir Dados no Banco */
    
    /* Metodo Construtor Login */
        public function __construct($Login = '' , $Password = '') {
            $this -> setDeslogin($Login);
            $this -> setDessenha($Password);
        }
    /* Fim Metodo Construtor Login */

    /* Metodo para retornar dados JSON */

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
        
    /* FIM Metodo para retornar dados JSON */
    
    
    
    }


?>