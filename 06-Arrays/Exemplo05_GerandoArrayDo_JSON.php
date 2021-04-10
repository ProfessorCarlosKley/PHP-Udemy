<?php
//////////////////////////////////////////////////////////////////////
// GERANDO ARRAY A PARTIR DO JSON
// COPIADO DO RESULTADO DO EXEMPLO 04.
//////////////////////////////////////////////////////////////////////
$json = '[{"nome": "CARLOS","idade":40}, {"nome": "FABRIZIA", "idade": 44}, {"nome": "FLÁVIO", "idade": 38}, {"nome": "NETO","idade": 32}]';

$data = json_decode($json, true);

var_dump($data);

echo "<br>";
echo "<br>";

echo "<br><B> DEPOIS DE TRANSFORMADO EM ARRAY LER-SE-Á NORMALMENTE </b><br><br>";

echo "Nome: ";
print_r($data[0]['nome']);
echo "<br>";
echo "Idade: ";
print_r($data[0]['idade']);
echo "<br>";
echo "<br>";

echo "Nome: ";
print_r($data[1]['nome']);
echo "<br>";
echo "Idade: ";
print_r($data[1]['idade']);
echo "<br>";
echo "<br>";

echo "Nome: ";
print_r($data[2]['nome']);
echo "<br>";
echo "Idade: ";
print_r($data[2]['idade']);
echo "<br>";
echo "<br>";

echo "Nome: ";
print_r($data[3]['nome']);
echo "<br>";
echo "Idade: ";
print_r($data[3]['idade']);
echo "<br>";
echo "<br>";

/*
	- json_decode — Decodifica uma string JSON.
	- true FORÇA criação do array, caso contrário ele transforma em objetos.
	- Analisa a string codificada JSON e converte-a em uma variável do PHP.
	- https://www.php.net/manual/pt_BR/function.json-decode.php.

*/
