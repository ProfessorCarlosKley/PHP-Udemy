<?php 
$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");

$cmd = $conn -> prepare ("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "hacker";
$password = "$%#$%&";
$id = 7;

$cmd->bindParam(":LOGIN", $login);
$cmd->bindParam(":PASSWORD", $password);
$cmd->bindParam(":ID", $id);
//bindParam = bind = ligar, ligando (definindo) os parâmetros.

$cmd->execute();
echo "Alterado com sucesso!"


/*
	- O uso de passagem de valores com aspas simples torna vulnerável o banco à ataques hackers.
	- por exemplo, se explorarmos esse recurso e digitarmos uma barra no lugar das aspas, o mysql gerará um erro e expõe nomes dos campos por exemplo. Daí os hackers podem utilizar-se disso para descobrir a estrutura da tabela. 
	- Com o PDO onde os parâmetros são enviados separadamente, evitamos dores de cabeça no futuro.
*/	

?>