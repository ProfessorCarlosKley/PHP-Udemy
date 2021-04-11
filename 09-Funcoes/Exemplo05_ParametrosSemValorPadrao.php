<?php
function ola($texto, $msn = " Bom Dia!"){
  //O primeiro parâmetro não tem padrão, somos obrigados a informar.
  return "Olá $texto $msn<br>";
}
/*
	- Obrigado informar o primeiro argumento. Se não for passado o valor padrão do 1º argumento, o navegador retornará erro.
  
  	- Os valores obrigatórios devem estar sempre à esquerda na ordem da chamada.
  
*/
echo ola("");
//Passa 1º argumento (Obrigatório) como vazio.
//Retorna: Olá Bom Dia!

echo ola("", "");
//Passa argumentos vazios. Não esceve nada. Foge do Padrão.
//Retorna: Olá.

echo ola("", "- Good Morning");
//Passa 1º argumento vazio. 2º com valor.
//Retorna: Olá - Good Morning.

echo ola("CARLOS", " - Boa noite!");
//Passa argumentos com valores.
//Retorna: Olá CARLOS - Boa noite!

echo ola("KLEI", " - Boa Tarde");
//Passa argumentos com valores.
//Retorna: Olá KLEI - Boa Tarde.

