<?php 

$id = (isset($_GET["id"]))?$_GET["id"]:1;

//se o usuário não passou nada, então passamos o id = 1. 

//Tratando falha do exemplo anterior:

/*Uma forma de tratar no caso do id é verificando se é numérico.

- Agora se tentarmos acrescentar OR 1 = 1 (não numérico) evitamos
  o loop em todo o banco. 

*/

if (!is_numeric($id)){
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