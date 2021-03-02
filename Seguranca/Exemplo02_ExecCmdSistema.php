<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){
//Verifica se os dados vieram através de post.
	$cmd = escapeshellcmd($_POST["cmd"]);

	//escape faz com que toda vez que vier um comando via post ou seja, dinamicamente, como é neste exemplo, ele identifica que é um comando via system e não executa. Uma forma de segurança.

	echo "<pre>";
	$comando = system($cmd, $retorno);
	//$retorno armazena o retorno do comando atrvés ee system.
	echo "</pre>";
}

 ?>

 <form method="post">
 	
 	<input type="text" name="cmd">
 	<button type="submit">Enviar</button>

 </form>

 <!--
	Passando comandos do sistema via formulário. 
	Torna a aplicação vulnerável. 

	Se digitarmos dir c:\ && c:/xampp/xamp_stop.exe
	O & serve para injetar comandos, por exemplo se o system da página estiver listando o diretório c, ela já está configurdo na página, portanto, o & faz com que seja injetado mais comandos, além do que já faz, faça mais isso, por exemplo. Neste caso aqui parar o servidor. Um forma do hacker injetar comandos. Com o uso de escapeshellcmd apenas será executado ocomando interno, programado na própria página php, os injetados com && serão ignorados.
	- Impediu a parada da execução do servidor mas, continuou mostrando a listagem caso injete dir c:\ && dir c:\windows.
 -->