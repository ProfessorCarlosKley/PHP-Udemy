<?php 
$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");

//Preparando o comando. prepare, método da classe PDO:
$cmd = $conn -> prepare ("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

//No PDO ao invéz de passarmos values com aspas, usa-se parâmetros.
//VALUES foi passado aqui como parâetro :LOGIN... Recurso php7.

$login = "debloid";
$password = "otarianos";

//bindParam = bind = ligar, ligando (definindo) os parâmetros.
$cmd->bindParam(":LOGIN", $login);
$cmd->bindParam(":PASSWORD", $password);

//Executando o comando. execute, método da classe PDO:
$cmd->execute();

echo "Salo com sucesso!";

/*
	- O uso de passagem de valores com aspas simples torna vulnerável o banco à ataques hackers.
	- por exemplo, se explorarmos esse recurso e digitarmos uma barra no lugar das aspas, o mysql gerará um erro e expõe nomes dos campos por exemplo. Daí os hackers podem utilizar-se disso para descobrir a estrutura da tabela. 
	- Com o PDO onde os parâmetros são enviados separadamente, evitamos dores de cabeça no futuro.
*/
?>
