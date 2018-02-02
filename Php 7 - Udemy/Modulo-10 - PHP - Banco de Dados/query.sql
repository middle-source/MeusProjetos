CREATE DATABASE curso_hcode;
USE curso_hcode;

CREATE TABLE tb_usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    deslogin VARCHAR(64) NOT NULL, 
    dessenha VARCHAR(256) NOT NULL, 
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);


INSERT INTO tb_usuarios(deslogin, dessenha) VALUES( 'root', '123456');

SELECT * FROM tb_usuarios;

UPDATE tb_usuarios SET dessenha = '1234567' WHERE id_usuario = 1;

DELETE FROM tb_usuarios WHERE id_usuario = 1;

SELECT * FROM tb_usuarios;

TRUNCATE TABLE tb_usuarios;


CREATE PROCEDURE 'sp_usuarios_insert' (
    pdeslogin VARCHAR(64),
    pdessenha VARCHAR(256)
)
BEGIN 
    INSERT INTO tb_usuarios(deslogin, dessenha) VALUES( pdeslogin, pdessenha);
    SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
END