<?php 

$id = (isset($_GET["id"]))?$_GET["id"]:1;

//se o usuário não passou nada, então passamos o id = 1. 

//Tratando falha do exemplo anterior 03:

/*Outra forma de tratar é utilizar o tamanho do campo.

*/

if (!is_numeric($id) || strlen($id>5)){
	exit("Pegamos você!");
}

$conn = mysqli_connect("localhost", "root", "", "udemydbphp7");
$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){
	echo $resultado -> deslogin . "<br>";
	//var_dump($resultado);
}

 ?>