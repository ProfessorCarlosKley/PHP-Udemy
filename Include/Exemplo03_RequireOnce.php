<?php
require_once "Somar.php";
require "Funcoes/Multiplicar.php";

echo "R E Q U I R E";
echo "<br>";

$resultado = somar(10, 20);
echo $resultado . " (Soma)";
$resultado2 = multiplicar(10, 20);
echo "<br>";
echo $resultado2 . " (Multiplicação)";
//require exige a existência do arquivo e que o mesmo esteja funcionando corretamente,
// caso contrário ele gera erro fatal e para a execução do código.
// O include tenta rodar (funcionar) o resto do código mesmo que o arquivo não exista
//ou * tenha algum tipo de problema.
//Require once evita que o arquivo seja incluido duas vezes... Evita duplicações, ainda 
//que chamemos duas vezes.
