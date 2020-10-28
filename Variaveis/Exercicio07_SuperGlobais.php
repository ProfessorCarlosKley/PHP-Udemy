<?php

$nome = $_GET["a"];
var_dump($nome);
echo "Testando superglobal $_GET";
/*
- GET é uma superglobal (um array) que possui todas as variáveis que é recebida através da url.

- Estamos dizendo que nome = GET, logo, vai receber uma variável chamada a;

= Como passar essa variável? Depois do endereço da página colocamos ? e

http://localhost/udemy/Variaveis/Exercicio07_SuperGlobais.php?a=http://localhost/udemy/Variaveis/Exercicio07_SuperGlobais.php?a=CARLOS%20KLEI

- Toda informação vinda de GET ou POSt é sempre uma string, isso é verificado com var_dump($nome), sendo assim, para somar a variavel b, que é uma string, faremos um casting.
*/

?>
