<?php
function ola($texto = "BAHIA", $msn = " Bom Dia!")
{
  //BAHIA é uma string padrão, caso a função seja chamada sem argumento.
  return "Olá $texto $msn<br>";
}
echo ola();
//Imprime valores padrões. Retorna: Olá BAHIA Bom Dia.

echo ola("");
//Passa 1º argumento vazio. Escreve segundo argumento.
//Retornará: Olá Bom dia.

echo ola("", "");
//Passa argumentos vazios. Não esceve nada. Foge do Padrão.
//Retornará: Olá.

echo ola("", "- Good Morning"); //
//Primeiro argumento vazio e segundo definido:
//Retornará: Olá - Good Morning.

echo ola("CARLOS", " - Boa noite!");
//Passa dois argumentos. 
//Retornará: Olá CARLOS - Boa noite!.

echo ola("KLEI", " - Boa Tarde");
//Retornará: Olá CARLOS - Boa noite!.
//Olá KLEI - Boa Tarde
