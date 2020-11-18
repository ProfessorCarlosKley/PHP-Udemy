USE udemydbphp7;
CREATE TABLE tb_usuarios(
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
#campo inteiro, não nulo, auto incremento e chave primária.
deslogin VARCHAR(64) NOT NULL,
#campo texto de qualquer caracter, campo descritivo, por isso prefixo des (boas práticas)
dessenha VARCHAR(256) NOT NULL, 
#o campo de senha será criado um rash para verificar senha por isso 256
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
# TIMESTAMP para armazenar data e hora atomaticamente, default recebe a data e hora do servidor que está rodando.auto_increment
# TIMESTAMP Já visto nas aulas anteriores do php.
);

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root', '589589');
SELECT * FROM tb_usuarios;
UPDATE tb_usuarios SET dessenha = '58958900' WHERE idusuario = 1;
#Altera o campo senha onde idusuario seja igual a 1;
SELECT * FROM tb_usuarios;

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('carlos', '589589');
UPDATE tb_usuarios SET dessenha = '58958900';
#Altera de todos os usuários. Para isso, tem que desabilitar safe updates em preferencias em SQL Editor.
UPDATE tb_usuarios SET dessenha = '589589' WHERE idusuario = 2;

DELETE FROM tb_usuarios WHERE idusuario = 2;

TRUNCATE TABLE tb_usuarios;
#limpa a tabela e zera auto incremento.


