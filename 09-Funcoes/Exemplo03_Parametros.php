<?php
function ola($texto = "BAHIA"){
    //BAHIA é uma string padrão, caso a função seja chamada sem argumento.
  return "Olá $texto<br>";
}
echo ola(); 	//Imprime o argumento padrão.
echo ola("");	//Passa argumento vazio. Não esceve nada. Foge do Padrão.
echo ola("CARLOS"); //Define um argumento.
echo ola("KLEI"); //
?>