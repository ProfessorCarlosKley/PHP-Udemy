<?php

$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");
$conn -> beginTransaction (); 
//Inicia uma transação que pode ser cancelada, rollback ou confirmada commit.

$cmd = $conn -> prepare ("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

//$cmd->bindParam(":ID", $id);
//bind = ligar, ligando os parâmetros.

//Passando parâmetros com ? ao invés de :$ID.

//Neste exemplo como temos uma ?, passamos apenas um índice no array.
//Se tivéssemos mais de uma interrogação, passaríamos separando com vírgulas.

$cmd -> execute(array($id));
$conn -> commit(); //Cancela a operação de DELETE.

echo "Exclusão Confirmada!"
?>