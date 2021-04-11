<?php
function ola(){	
  $argumentos = func_get_args();
  /* 
  -	func_get_args — Retorna um array contendo uma lista de argumentos da função. https://www.php.net/manual/pt_BR/function.func-get-args.php

  - Essa função gera um array que serve lista de parâmetros que servem de argumentos para função
  	 - Assim, podemos informar vários arugmentos, mesmo que não saibamos quantos precisaremos.*/

  return $argumentos; //Retorna um array com os argumentos informados.
}
echo"<b>Resultado do array com echo[i].</b><br><br>";
$mensagem = ola("Carlos Klei", "Programador Senior", "Seja bem vindo.");

echo $mensagem[0] . " :: ";
echo $mensagem[1] . " :: "	;
echo $mensagem[2];


echo"<br>";
echo"<br>";
echo"<b>Resultado do array com var_dump.</b>";
echo"<br>";
echo"<br>";
var_dump(ola("Bom dia", "Carlos"));
echo"<br>";
echo"<br>";
echo"<b>Resultado do array com print_r.</b><br><br>";
print_r (ola(" CARLOS ", " - BOM DIA "));
echo"<br>";
echo"<br>";
echo "Nome: ";
print_r (ola(" CARLOS ", " - BOM DIA ")[0]);
echo "Saudação: ";
print_r (ola(" CARLOS ", " - BOM DIA ")[1]);