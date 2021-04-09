<?php

$valor1 = (int) $_GET["a"];
$valor2 = (int) $_GET["b"];
//Fazer um casting não é criar uma variável do tipo desejada, é transformar a variável já definida num tipo pretendido. 

echo "Testando superglobal:";
echo "<br>";
echo "Resultado da variável a: ";
echo $valor1 * 50;
echo "<br>";
echo "Resultado da variável b: ";
echo $valor2 * 50;
/*
- GET é uma superglobal (um array de string), ela possui todas as variáveis que é recebida através da url. Podemos usar o index para retornar ou as chaves do array. Como uma string, toda informação que vier de GET ou POST será considerada uma string. Se precisamos somar números por exemplo, precisamos fazer uma conversão (Casting). 

- Estamos dizendo que nome = GET, logo, vai receber da url depois de ? uma variável chamada a; 

- Áté a ? corresponde o endereço das páginas, depois da ? são as variáveis. portanto a interrogação divide a url das variáveis.

- Como passar essa variável? Depois do endereço da página colocamos ? e
  por exemplo: ?a="CARLOS KLEI"

	http://localhost/udemy/Variaveis/Exercicio07_SuperGlobais.php?a=http://localhost/udemy/Variaveis/Exercicio07_SuperGlobais.php?a=50&b=456

- As superglobais são acessadas de qualquer ambiente.

- Toda informação vinda de GET ou POSt é sempre uma string, isso é verificado com var_dump($nome), sendo assim, para somar a variavel b, que é uma string, faremos um casting.

- Toda barra de endereço é uma url. Uma URL é, basicamente, o endereço virtual de uma página ou website. A sigla tem origem na língua inglesa e significa "Uniform Resource Locator" (Localizador Uniforme de Recursos, em tradução livre).
	A URL é dividida em várias partes. E, essas partes são chamadas de URI, por exemplo, http é uma uri ou seja, uma parte de uma url.
	http é uma URI, uma parte de uma URL, diz que estou na internet. 
	https, diz que estou num ambiente criptografado.

	A URI (Uniform Resource Identifier, ou Identificador Uniforme de Recursos)
	
*/

?>
