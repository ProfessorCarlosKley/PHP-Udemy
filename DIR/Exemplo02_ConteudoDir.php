<?php 

$name = "imagens";

if (is_dir($name)){
	$readir = scandir("imagens");
 	var_dump($readir);
	}
?>

