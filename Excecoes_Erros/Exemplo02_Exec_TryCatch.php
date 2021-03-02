<?php 

function trataNome($name){
	if (!$name){//Se o parâmetlro nome não for informado.
		throw new Exception("ARGUMENTO AUSENTE!", 500);
	
	}

	echo ucfirst($name)."<br>";
}

try {
		//Tentando chamar a função, com e sem parâmetros.
		//Na segunda chamada gerará uma exceção.
	trataNome("CHAMADA DA FUNÇÃO COM PARÂMETRO.<BR>");
	trataNome("");
} catch (Exception $e) {
	
	echo json_encode(array(
	"Erro:" => $e -> getMessage(), 
	"Line" => $e -> getLine(),
	"Arquivo" => $e -> getFile(),
	"Codigo" => $e -> getCode()
));

} finally{
	//É sempre executado, independente de ter caído no try ou no catch.
		echo "<br>Executou Try!";
}

 ?>