<?php 
$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");

$cmd = $conn -> prepare ("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 6;

$cmd->bindParam(":ID", $id);
//bind = ligar, ligando os parâmetros.

$cmd->execute();
echo "Apagado com sucesso!"


/*  - prepare método de PDO, prepara um comando a ser executado e armazena em $cmd.
	- No PDO ao invéz de passarmos values com aspas, usa-se parâmetros.
*/


?>