<form method="post">

	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>
<?php 

if (isset($_POST["busca"])){
	echo $_POST['busca'];
}

/*Desse modo, se digitarmos <b>NOME</b> teremos o resultado do echo em negrito na tela. O que torna o indesejável. Noe exemplo 09, será tratado isso.*/

 ?>