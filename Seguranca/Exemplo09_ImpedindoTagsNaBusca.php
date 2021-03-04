<form method="post">

	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>
<?php 

if (isset($_POST["busca"])){
	echo strip_tags($_POST['busca'], "<strong><a>");

		//echo htmlentities(($_POST['busca']));
}

/*Tratando tags indesejadas. strip_tags
	- A opção <strong><a> é uma exceção, as tags <stribg> e <a> será permitida.
	- htmlentities escreve a tag na página mas també não executa, faz com que ela vire texto.
*/

 ?>