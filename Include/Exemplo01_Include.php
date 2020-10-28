<?php
include "Somar.php";
include "Funcoes/Multiplicar.php";

$resultado = somar(10, 20);
echo $resultado . " (Soma)";
$resultado2 = multiplicar(10, 20);
echo "<br>";
echo $resultado2 . " (Multiplicação)";
