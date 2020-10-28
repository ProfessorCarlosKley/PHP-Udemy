<?php

$nome = "CARLOS KLEI CARVALHO DE MOURA";

function teste()
{

	global $nome;
	/*
	- global permite à função reocnhecer a variável nome definida fora dela.
	- Se a função for chamada sem essa definição, echo não reconhecerá $nome, pois ela não consegue pegar fora do escopo da função.
	*/
	echo $nome;
}

function teste2()
{
	if (isset($nome)) {
		echo $nome;
		//não imprimirá o nome, pois a variável não reconhece $nome que está fora da função.
	} else {
		echo "<br> variável nome definida antes não é reconhecida aqui no escopo da função.";
	}
}

function teste3()
{
	$nome = "<br>PROGRAMADOR PHP";
	echo $nome . " - Essa mensagem foi definida na variável nome local à função teste3()!";
	
}
echo teste();
echo teste2();
echo teste3();
