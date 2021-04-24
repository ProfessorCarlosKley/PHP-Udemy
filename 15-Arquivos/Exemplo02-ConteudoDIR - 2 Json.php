<?php 

$images = scandir("imagens");
//Escanenado DIR imagens. Images recebe um array do conteúdo da pasta.

$data = array();

foreach ($images as $img) {
	
	//Eliminando o retorno de . e de ..;
	if (!in_array($img, array(".", ".."))){

		$filename = "imagens" . DIRECTORY_SEPARATOR . $img;
		//imagens é o nome da pasta. $filename tem o endereço  completo do arquivo.

		//Obtendo informações da imagem atual em foreach.
		$info = pathinfo($filename);
		//Recuperando além das informações básicas com pathinfo o e a data de modificação do arquivo.
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		//filemtime retorna a data de modificação e exibimos com date para personalizar seu retorno no nosso padrão.
		
		$info["url"] = "http://localhost/udemy/15-arquivos/" . str_replace("\\","/",$filename);

		//Acessando o arquivo com uma url.
		//O replace só para windows, no linux as barras estarão certas.
		
		array_push($data, $info);
		//Inserindo no array para melhor visualização. Para transformar nu json.

		//var_dump($info);
		//print_r($info);

		//in_array(needle, haystack). 
		//needle, é o alvo, onde eu procuro.
		//haystack são as opções o que procuro, que nada mais é que um array.
		//a negação é porque não queremos encontra esses pontos, e a função in_array encontra um valor no array e retorna true, por isso negamos, porque não queremos exibir esses pontos.
	}
} //Fim de foreach.

echo json_encode($data);
/*
	- scandir — Lista os arquivos e diretórios que estão no caminho especificado
	https://www.php.net/manual/pt_BR/function.scandir.php

	- O retorno trará um array com posição [0] um ponto (.) referente DIR local, e posição [1] dois pontos (..) um DIR, acima.

	- in_array — Checa se um valor existe em um array.
	Sintaxe:
	
	- in_array ( mixed $needle , array $haystack , bool $strict = ? ) : bool
	https://www.php.net/manual/pt_BR/function.in-array.php

	- pathinfo — Retorna informações sobre um caminho de arquivo.
*/

 ?>