<?php
#GERANDO JSON A PARTIR DE UM ARRAY
$pessoas = array();
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

echo json_encode($pessoas);
