<?php
#GERANDO JSON A PARTIR DE UM ARRAY
$pessoas = array();

array_push($pessoas, array(
    'nome' => 'CARLOS',
    'idade' => 40
)); //Campos do array índice 0

array_push($pessoas, array(
    'nome' => 'FABRIZIA',
    'idade' => 44
)); //Campos do array índice 1

array_push($pessoas, array(
    'nome' => 'FLÁVIO',
    'idade' => 38
)); //Campos do array índice 2

array_push($pessoas, array(
    'nome' => 'NETO',
    'idade' => 32
)); //Campos do array índice 3


echo json_encode($pessoas);

/*
	- JSON é basicamente um formato leve de troca de informações/dados entre sistemas. (Vem substituindo o XML).
	- JSON significa JavaScript Object Notation.

	json_encode — Retorna a representação JSON de um valor. Ou seja, recebe um valor e transforma no formato json. Neste caso, um array em json.
	
	Sintaxe:

	json_encode ( mixed $value , int $options = 0 , int $depth = 512 ) : string.

	Retorna a string contendo a representação JSON de um value.	

	https://www.php.net/manual/pt_BR/function.json-encode.php

*/