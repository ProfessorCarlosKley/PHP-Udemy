<?php
require_once "Somar.php";
require_once "Funcoes/Multiplicar.php";

echo "R E Q U I R E";
echo "<br>";

$resultado = somar(10, 20);
echo $resultado . " (Soma)";
$resultado2 = multiplicar(10, 20);
echo "<br>";
echo $resultado2 . " (Multiplicação)";

/*Require once evita que o arquivo seja incluido duas vezes... Evita duplicações, ainda que chamemos duas vezes.

require ou include ao serem chamados mais de uma vez, geram erro fatal. A partir do php7, erros fatais não mais param a execução da página, eles geram exceções que podemos tratar.
*/
