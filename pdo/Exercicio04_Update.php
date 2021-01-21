<?php 
$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");

$cmd = $conn -> prepare ("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "CaraDeOnca";
$password = "oncapintada";
$id = 5;

$cmd->bindParam(":LOGIN", $login);
$cmd->bindParam(":PASSWORD", $password);
$cmd->bindParam(":ID", $id);
//bind = ligar, ligando os parâmetros.

$cmd->execute();
echo "Alterado com sucesso!"


/*  - prepare método de PDO, prepara um comando a ser executado e armazena em $cmd.
	- No PDO ao invéz de passarmos values com aspas, usa-se parâmetros.
*/


?>