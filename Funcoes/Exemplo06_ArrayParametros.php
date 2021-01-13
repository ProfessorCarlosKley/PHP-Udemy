<?php
function ola(){
  $argumentos = func_get_args();
  # essa função gera um array que serve de argumentos para função
  # Assim, podemos informar vários arugmentos, mesmo que não saibamos
  # quanto sprecisaremos.
  return $argumentos; //Retorna um array com os argumentos informados.
}
var_dump(ola("Bom dia", "Carlos"));
echo"<br>";
print_r (ola(" CARLOS ", " - BOM DIA "));
echo"<br>";
echo "Saudação: ";
print_r (ola(" CARLOS ", " - BOM DIA ")[0]);
echo "Nome: ";
print_r (ola(" CARLOS ", " - BOM DIA ")[1]);