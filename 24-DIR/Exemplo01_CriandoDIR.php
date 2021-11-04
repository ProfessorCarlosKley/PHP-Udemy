<?php 
$name = "images";
if (!is_dir($name)){
 	//is_dir verifica se diretório existe
 	//!is_dir se não existir o diretório.
 	mkdir($name);
	echo "Diretoório $name criado com sucesso!"; 	
} else {
 	echo "Diretório $name, foi excluído.";
 	rmdir($name); //remove
 }
?>