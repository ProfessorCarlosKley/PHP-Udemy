<?php 

try {

	//Gerando uma exceção. Um erro fatal.
	//O número serve para me localizar e através dele posso fazer uma documentação para tratar cada erro.
	//Este erro foi forçado.
	throw new Exception("ERRO PROPOSITAL", 400);

	
} catch (Exception $e) {
	//$e pode ter qualqur nome. Quando a Exception é capturada ele joga nesta variável.
	//$e é um objeto com informações do erro gerado.
echo json_encode(array(
	"Erro:" => $e -> getMessage(), 
	"Line" => $e -> getLine(),
	"Arquivo" => $e -> getFile(),
	"Codigo" => $e -> getCode()
));
	
}

 ?>