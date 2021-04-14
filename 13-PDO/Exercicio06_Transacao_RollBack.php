<?php

$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");
$conn -> beginTransaction ();
/* 

	- beginTransaction, inicia uma transação. 
	- A transação está amarrada à conexão. Por isso usa-se o métdo de PDO.
	- Essa transação pode ser cancelada (rollback) ou confirmada (commit).
	- Trasações evitam erros acidentais de exclusão ou atualizações.
	- Transação é um processo em que, ou tudo da certo e confirmarmos com o commit, ou se der algo errado eu volto com rollback.
	- Um exemplo de transação, é uma transferência bancária. Ela só acontece de fato se for confirmado a conta de débito e a conta destinatário, caso a conta credora naõ seja encontrada, a transação é encerrada e o numerário voltará para conta do debitado.

	*/

$cmd = $conn -> prepare ("DELETE FROM tb_usuarios WHERE idusuario = ?");

/*
	- Neste exemplo, estamos passando parâmetros com ? (outra forma de passagem de parâmetros) ao invés de :$ID.	
	- Ao usarmos uma ? para passagem de parâmetro, passamos apenas um índice no array, não precisamos fazer um bindParam.
	- Se tivéssemos mais de uma interrogação, passaríamos separando com vírgulas.
*/
$id = 1;
$cmd -> execute(array($id));
$conn -> rollback(); //Cancela a operação de DELETE.
/* rollback() poderia estar associado a alguma condição.*/

echo "Processo cancelado!"

/*

	public PDO::beginTransaction ( ) : bool

	Desativa o modo de envio automático. Enquanto o modo de envio automático estiver desativado, modificações feitas no banco de dados por meio da instância do objeto PDO não serão enviadas até que você finalize a transação chamando PDO::commit(). Chamar PDO::rollBack() reverterá todas as alterações no banco de dados e retornará a conexão para o modo de envio automático.

	Alguns bancos de dados, incluindo o MySQL, emitem automaticamente um COMMIT implícito quando uma instrução de linguagem de definição de banco de dados (DDL) como DROP TABLE ou CREATE TABLE é emitida em uma transação. O COMMIT implícito impedirá que você reverta quaisquer outras alterações dentro do limite da transação.

Valor Retornado

	Retorna true em caso de sucesso ou false em caso de falha.

				(https://www.php.net/manual/pt_BR/pdo.begintransaction.php)	
*/
?>