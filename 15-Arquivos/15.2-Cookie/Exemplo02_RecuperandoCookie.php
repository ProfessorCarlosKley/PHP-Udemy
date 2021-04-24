<?php 

//Array super global que contém os cookies na máquinha local.
//Para verificar, F12 no chrome e na aba << aplicativo >> do lado esquerdo tem a lista do cookies na opção cookie.
// NOME_DO_COOKIE foi o nome do cookie que criamos.

if (isset($_COOKIE["NOME_DO_COOKIE"])){//Verificando se o coolie existe.
	//$_COOKIE array dos cookies existentes;
	
	//var_dump($_COOKIE["NOME_DO_COOKIE"]) // retorna uma string formatada em json.
	
	$data = (json_decode($_COOKIE["NOME_DO_COOKIE"], true));
	//PRECISO FORNECER O NOME DO COOKIE PARA CONSULTAR;
	//json_decode para transformar o json num array. True para array, senão, decode retorna objetos.

	foreach ($data as $key => $value) {
		echo "$key: $value <br>";
	}
	//AGORA DECODIFICANDO E RETORNANDO OBJETO NO LUGAR DO ARRAY. OMITE O TRUE.
	echo "<br>";
	echo "RETORNANDO OBJETO E NÃO ARRAY COM json_decode<br>";
	echo "<br>";
	

	$obj = (json_decode($_COOKIE["NOME_DO_COOKIE"]));

	foreach ($obj as $key => $value) {
		echo $obj->$key."<br>";
	}
	

}
 ?>
