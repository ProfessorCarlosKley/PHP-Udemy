<form method="POST" enctype="multipart/form-data">

	<!-- enctype recurso novo que permite colocar o tipo de inormação que estamos enviando.
	multipart/form-data significa que tudo que estiver dentro do form será enviado como dados binários... resolve o problema do arquivo imagem. Se não usarmos essa propriedade, o arquivo do lado do php receberá tudo como string.

	type="file" é um botão do tipo "escolher ficheiro", que permite selecionar o arquivo que queremos.
	-->
<input type="file" name="fileupload">

<button type="submit">Send</button>

</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){
	//$SERVER["REQUEST_METHOD"] guarda o tipo de soliticação.
	
	//$_FILE super global que serve para tratar arquivos que foram enviados especificamente via upload. 

	/*
	Processos de upload: Primeiro movemos o arquivo para um diretório temporário, se o arquivo for muito grande, será transferido em pedaços. Após conclusão do envio do arquivo, ele será movido para a pasta específica no servidor.
	*/

	$file = $_FILES["fileupload"]; //_FILES Array global. 
	if ($file["error"]){ //Se houver algum erro no arquivo.
		throw new Exception("Error:".$file("error")); //Gerando exceção.
		//A mensagem de erro está dentro de $file("error").
			}

$dirUploads = "upload";

if (!is_dir($dirUploads)){
	mkdir ($dirUploads);
}

//move_uploaded_file: move do dir temporário para o diretório final, no servidor.
//Se o upload tiver êxito a função retorna true, caso contrário, false.

if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
	//as chaves tmp_name e name existem no array global $_FILES, atribuída à variável $file. $file = $_FILES["fileupload"];
	echo "Upload realizado com sucesso.";

}else{
	throw new Exception("Não foi possível realizar upload.");
	
}


}
 ?>

