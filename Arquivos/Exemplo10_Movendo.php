<?php 
$dir1 = "Mov1";
$dir2 = "Mov2";
$filename = "README.txt";

if (!is_dir("$dir1")) mkdir("Mov1");
if (!is_dir("$dir2")) mkdir("Mov2");

//verificando a existência do arquivo em dir1;
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){
	//Cria README.txt na pasta Mov1.
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);
}
	//Renomeia php.txt para  renomeado.txt
	rename($dir1 . DIRECTORY_SEPARATOR . "php.txt",
		   $dir1 . DIRECTORY_SEPARATOR . "renomeado.txt"
		);
	//Move README.txt para Mov2.
	rename($dir1 . DIRECTORY_SEPARATOR . $filename,
		   $dir2 . DIRECTORY_SEPARATOR . $filename
		);
	//Utilizado para mover ou renomear.
	//Se for para mesma pasta, basta renomear o arquivo.
	//sintaxe: rename(origem, destino);

echo "Operação realizada com sucesso.";
		?>