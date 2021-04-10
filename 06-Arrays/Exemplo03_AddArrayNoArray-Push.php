<?php
$pessoas = array();
/* 
  array_push — Adiciona um ou mais elementos no final de um array
  array_push(array_alvo, array_inserido).
  https://www.php.net/manual/pt_BR/function.array-push.php


Neste exemplo, vamos adicionar um array dentro do array principal*/

array_push($pessoas, array(
    'nome' => 'CARLOS',
    'idade' => 40
)); //Campos do array índice 0

array_push($pessoas, array(
    'nome' => 'FABRIZIA',
    'idade' => 44
)); //Campos do array índice 1

array_push($pessoas, array(
    'nome' => 'FLÁVIO',
    'idade' => 38
)); //Campos do array índice 2

array_push($pessoas, array(
    'nome' => 'NETO',
    'idade' => 32
)); //Campos do array índice 3
    

/*  print_r — Imprime informação sobre uma variável de forma legível
  	print_r ( mixed $expression , bool $return = false ) : mixed
	  https://www.php.net/manual/pt_BR/function.print-r	
*/

print_r($pessoas); //imprime todo o array.

echo "<br><br> EXIBINDO APENAS A PRIMEIRA PESSOA CADASTRADA <br>";

echo "<br>";
print_r($pessoas[0]);
echo "<br>";

echo "<br><B> EXIBINDO VALORES DAS CHAVES </b><br><br>";

echo "Nome: ";
print_r($pessoas[0]['nome']);
echo "<br>";
echo "Idade: ";
print_r($pessoas[0]['idade']);
echo "<br>";
echo "<br>";

echo "Nome: ";
print_r($pessoas[1]['nome']);
echo "<br>";
echo "Idade: ";
print_r($pessoas[1]['idade']);
echo "<br>";
echo "<br>";

echo "Nome: ";
print_r($pessoas[2]['nome']);
echo "<br>";
echo "Idade: ";
print_r($pessoas[2]['idade']);
echo "<br>";
echo "<br>";

echo "Nome: ";
print_r($pessoas[3]['nome']);
echo "<br>";
echo "Idade: ";
print_r($pessoas[3]['idade']);
echo "<br>";
echo "<br>";