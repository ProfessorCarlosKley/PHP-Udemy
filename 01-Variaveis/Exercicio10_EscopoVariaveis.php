<?php

$nome = "CARLOS KLEI CARVALHO DE MOURA";

function teste()
{

	global $nome;

	/*
	
	- global permite à função reocnhecer a variável nome definida fora da função. Diz que a função quero ouvir a variável nome globalmente.

	- Se a função for chamada sem essa definição, echo não reconhecerá 	$nome, pois ela não consegue pegar fora do escopo da função.

	- As chaves determinam um escopo.

	- $nome dentro da função não é a mesma coisa que $nome fora da função, estão em áreas diferentes (escopo). Por isso, indicamos que $nome como global, aí a função reonhece fora de seu escopo.

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
