<?php 

/*

- Manipulando erro do php.
- Se acontecer um erro, abortamos a mensagem de erro do php e executamos uma função que podemos personalizar melhor.
- Evitando mensagem de erro no php e configurando a nossa.
- A função pode ter o nome que quiser, mas os parâmetros devem seguir a ordem que o php retorna.
*/

function error_handler($code, $message, $file, $line){

	echo json_encode(array(

		"Codigo" => $code,
		"Erro" => $message,
		"Linha" => $line,
		"Arquivo" => $file
	));

}

//Quando ocorrer o erro, chama a função que criamos, através de set_error_handeler.

set_error_handler("error_handler");
//set_error_handler recebe como parâmeltro o nome da função que deve ser chamada quando ocorrdr o erro, por isso indicamos entre aspas, é o nome (string) não é a chamada da funçã.

//PROVOCANDO UM ERRO.
echo 100/0;

//No curso foi carido uma pasta com o nome error, o apache não aceita esse nome na pasta.
 ?>