<?php

$nome = $_GET["a"];
var_dump($nome);

echo "<br> Testando superglobal.";
/*
- GET é uma superglobal (um array de string), ela possui todas as variáveis que é recebida através da url. Podemos usar o index para retornar ou as chaves do array. Como uma string, toda informação que vier de GET ou POST será considerada uma string. Se precisamos somar números por exemplo, precisamos fazer uma conversão (Casting). 

- Estamos dizendo que nome = GET, logo, vai receber da url depois de ? uma variável chamada a; 

- Áté a ? corresponde o endereço das páginas, depois da ? são as variáveis. portanto a interrogação divide a url das variáveis.

- Como passar essa variável? Depois do endereço da página colocamos ? e
  por exemplo: ?a="CARLOS KLEI"

	http://localhost/udemy/Variaveis/Exercicio07_SuperGlobais.php?a=http://localhost/udemy/Variaveis/Exercicio07_SuperGlobais.php?a=CARLOS%20KLEI

- As superglobais são acessadas de qualquer ambiente.

- Toda informação vinda de GET ou POSt é sempre uma string, isso é verificado com var_dump($nome), sendo assim, para somar a variavel b, que é uma string, faremos um casting.

- Toda barra de endereço é uma url. Uma URL é, basicamente, o endereço virtual de uma página ou website. A sigla tem origem na língua inglesa e significa "Uniform Resource Locator" (Localizador Uniforme de Recursos, em tradução livre).
	A URL é dividida em várias partes. E, essas partes são chamadas de URI, por exemplo, http é uma uri ou seja, uma parte de uma url.

		A URI (Uniform Resource Identifier, ou Identificador Uniforme de Recursos)
*/

?>
