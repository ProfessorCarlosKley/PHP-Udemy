<?php 

$images = scandir("imagens");
//Escanenado DIR imagens. Images recebe um array do conteúdo da pasta.

echo "RETORNANDO CONTEÚDO DO DIR COM var_dump";
echo "<br>";
var_dump($images);
echo "<br>";
echo "<br>";
echo "RETORNANDO CONTEÚDO DO DIR COM print_r";
echo "<br>";
print_r($images);
echo "<br>";
echo "<br>";
echo "RETORNANDO CONTEÚDO DO DIR COM foreach no array e obtendo informações dos arquivos.";
echo "<br>";
echo "<br>";

foreach ($images as $img) {
	
	//Eliminando o retorno de . e de ..;
	if (!in_array($img, array(".", ".."))){

		$filename = "imagens" . DIRECTORY_SEPARATOR . $img;
		//imagens é o nome da pasta. $filename tem o endereço  completo do arquivo.

		$info = pathinfo($filename);
	
		//Inserindo no array para melhor visualização. Para transformar nu json.

		//var_dump($info);
		print_r($info);

		//in_array(needle, haystack). 
		//needle, é o alvo, onde eu procuro.
		//haystack são as opções o que procuro, que nada mais é que um array.
		//a negação é porque não queremos encontra esses pontos, e a função in_array encontra um valor no array e retorna true, por isso negamos, porque não queremos exibir esses pontos.
	}
} //Fim de foreach.

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