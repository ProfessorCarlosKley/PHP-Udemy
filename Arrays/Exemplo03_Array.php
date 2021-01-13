<?php
$pessoas = array();
//  Adicionando elementos no array. Neste caso outro array,
//  para conter os dados da pessoa.

//array_push(array_alvo, array_inserido)
array_push($pessoas, array(
    'nome' => 'CARLOS',
    'idade' => 40
)); //Campos do array índice 0

array_push($pessoas, array(
    'nome' => 'KLEY',
    'idade' => 44
)); //Campos do array índice 1

array_push($pessoas, array(
    'nome' => 'CARVALHO',
    'idade' => 32
)); //Campos do array índice 2

print_r($pessoas); //imprime todo o array.

echo "<br><br> EXIBINDO APENAS A PESSOA DO ÍNIDCE 0 <br>";

echo "<br>";
print_r($pessoas[0]);
echo "<br>";

echo "<br> EXIBINDO APENAS OS VALORES<br><br>";

echo "Nome: ";
print_r($pessoas[0]['nome']);
echo "<br>";
echo "Idade: ";
print_r($pessoas[0]['idade']);
