<?php
$qualSuaIdade = 25;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {
    echo "Criança";
} else if ($qualSuaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($qualSuaIdade < $idadeMelhor) {
    echo "Adulto.";
} else {
    echo "Idoso...";
}

echo "<br>";

echo ($qualSuaIdade < $idadeMaior) ? "Menor de idade." : "Maior de Idade.";

/*Operador Ternário...
	- indicado para testes simples, sem muitas condições.
() = teste.
? = então.
: = senão.
*/
