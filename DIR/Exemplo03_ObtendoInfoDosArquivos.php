<?php 

$pasta = "imagens";

$data = array();

if (is_dir($pasta)){
	$readir = scandir($pasta);
 	
	foreach ($readir as $img) {
		//foreach percorre o array e para cada vetor adiciona em $img.
		if (!in_array($img, array(".", ".."))){
			//in_array faz uma busca dentro do array. Neste caso nega . e ..;
			//. e .. é retornado representando diretório local e superior.
			//são retornados ao lermos conteúdos da pasta com scandir.
			//ver exemplo02.php usando ctrl + u no browser.
			$filename = $pasta.DIRECTORY_SEPARATOR.$img;
			
			$info = pathinfo($filename);//Array com informãções do arquivo

			//Adiciona chave e valor no array
			$info["size"] = filesize($filename);
			$info["modify"] = Date("d/m/y H:i:s", filemtime($filename));
			//fieemtime para ver quando arquivo foi modificado
			$info["url"] = "http://localhost/udemy/dir/".str_replace("\\", "/",$filename);

			//array_push($info, filesize($filename));

			array_push($data, $info);
		}
	}

}
echo json_encode($data);
?>
