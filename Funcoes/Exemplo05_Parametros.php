<?php
function ola($texto, $msn = " Bom Dia!")
{
  //O primeiro argumento não tem valor padrão, neste caso somos obrigados a informar.
  return "Olá $texto $msn<br>";
}
echo ola("");
/*Obrigado informar o primeiro argumento.
  Se não for passado o valor padrão do 1º argumento, o navegador retornará erro.
  
  - Os valores obrigatórios devem estar sempre à esquerda na ordem da chamada.
  
*/
echo ola(""); //Passa 1º argumento vazio. Escreve segundo argumento.
echo ola("", ""); //Passa argumento vazio. Não esceve nada. Foge do Padrão.
echo ola("", "- Good Morning"); //
echo ola("CARLOS", " - Boa noite!");
echo ola("KLEI", " - Boa Tarde");
