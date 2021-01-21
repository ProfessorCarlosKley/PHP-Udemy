<?php 
$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");

$cmd = $conn -> prepare ("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "CaraDevaca";
$password = "vacalouca";

$cmd->bindParam(":LOGIN", $login);
$cmd->bindParam(":PASSWORD", $password);
//bind = ligar, ligando os parâmetros.

$cmd->execute();
echo "Salo com sucesso!"


/*  - prepare método de PDO, prepara um comando a ser executado e armazena em $cmd.
	- No PDO ao invéz de passarmos values com aspas, usa-se parâmetros.
*/


?>
