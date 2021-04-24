<?php 

$name = "imagens";

//se o dir não existir, devermos criar.
if (!is_dir($name)){
	mkdir($name);
	echo "Diretório imagens criado com sucesso!";
}else{
	// rmdir($name);  removeria diretorio
	echo "Não foi possível criar o diretório [imagens], ele já existe.";
}

 ?>