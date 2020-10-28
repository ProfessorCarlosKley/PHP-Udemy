<?php
function ola($texto = "BAHIA"){
    //BAHIA é uma string padrão, caso a função seja chamada sem argumento.
  return "Olá $texto<br>";
}
echo ola();
echo ola(""); //Passa argumento vazio. Não esceve nada. Foge do Padrão.
echo ola("CARLOS");
echo ola("KLEI");
?>