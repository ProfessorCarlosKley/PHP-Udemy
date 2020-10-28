<?php
function ola($texto = "BAHIA", $msn = " Bom Dia!")
{
  //BAHIA é uma string padrão, caso a função seja chamada sem argumento.
  return "Olá $texto $msn<br>";
}
echo ola();
echo ola(""); //Passa 1º argumento vazio. Escreve segundo argumento.
echo ola("", ""); //Passa argumento vazio. Não esceve nada. Foge do Padrão.
echo ola("", "- Good Morning"); //
echo ola("CARLOS", " - Boa noite!");
echo ola("KLEI", " - Boa Tarde");
