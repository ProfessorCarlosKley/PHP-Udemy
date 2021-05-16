<?php 

try {//Tente

	/*
		- Gerando uma exceção. Um erro fatal.
		- O número serve para me localizar e através dele posso fazer uma documentação para tratar cada erro.
		- Este erro foi forçado.

		*/

	throw new Exception("ERRO PROPOSITAL", 400);
	//throw = lance. Forçando erro. Gerando Exceção.
	//Exception classe nativa para exceções.

	
} catch (Exception $e) {
	
	// $e pode ter qualquer nome.
	// Quando a Exception é capturada ele joga as informações do erro nesta var.
	// $e é um objeto (Array) com informações do erro gerado.

echo json_encode(array(
	"Erro:" => $e -> getMessage(), 
	"Line" => $e -> getLine(),
	"Arquivo" => $e -> getFile(),
	"Codigo" => $e -> getCode()
));
	//Esses gets são métodos que já existem dentro do objeto Exception.
}

 ?>