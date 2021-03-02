<?php 

$id = (isset($_GET["id"]))?$_GET["id"]:1;

//se o usuário não passou nada, então passamos o id = 1. 

$conn = mysqli_connect("localhost", "root", "", "udemydbphp7");
$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){
	echo $resultado -> deslogin . "<br>";
	var_dump($resultado);
}
/*O problema nesse modelo é que o id que estamos enviando para o comando sql está vindo de uma url, o que torna o código vunerável.
O perigo ocorro porque o invasor pode fornecer o id malicioso por exmeplo:

http://localhost/udemy/seguranca/Exemlplo03_SqlInjection.php?id=11

O mais grave é que se colocarmos 1 = 1 -- tornando verdadeiro o loop
o -- diz que tudo na sequência é um comentário.

1 = 1 sempre séra verdadeiro daí ele executa tudo, percorre todo o banco.

http://localhost/udemy/seguranca/Exemlplo03_SqlInjection.php?id=11 OR 1=1 
todo conteúdo do banco será listado.

O que retorna o usr de id = 11
*/
 ?>