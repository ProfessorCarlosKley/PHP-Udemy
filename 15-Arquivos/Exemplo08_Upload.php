<form method="POST" enctype="multipart/form-data">

	<!-- 
	- enctype recurso novo que permite colocar o tipo de informação que estamos enviando. Por padrão um form envia apenas texto, string. Só que vamos enviar dados por meio do form, arquivos.
	- multipart/form-data significa que tudo que estiver dentro do form será enviado como dados binários... dados que fogem do padrão de string, (não estamos enviando apenas texto), resolve o problema do arquivo imagem. Se não usarmos essa propriedade, o arquivo do lado do php receberá tudo como string, então não funcionará.

	type="file" é um botão do tipo "escolher ficheiro", que permite selecionar o arquivo que queremos.

	Sem o action = "", ele envia para própria página.	
	-->
<input type="file" name="fileupload">

<button type="submit">Send</button>

</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){
	//$SERVER["REQUEST_METHOD"] guarda o tipo de solicitação (GET ou POST).
	
	/*
	Para recuperar um form enviado via get usamos $_GET, quando os dados são enviados via POST, que é este caso, usamos $_POST, mas para strings, no caso do arquivo, multipart/form-data vamos usar o $_FILES.

	$FILE super global que serve para tratar arquivos que foram enviados especificamente via upload. 

	Processos de upload: Ao enviarmos, o php ou qualquer linguagem de servidor, tem uma pasta temporária, e, serve para que sejam transferidos os pacotds desse arquivo pois, for muito grande, será transferido em pedaços. Após conclusão do envio do arquivo no temporário, ele estará à disposição para que possamos movê-lo do temporário do servidor para o local físico final.
	*/

	$file = $_FILES["fileupload"]; //_FILES Array global. 
	if ($file["error"]){
	 //Se houver algum erro no arquivo. error é uma chave do array que retorna um erro. Caso exista um erro o upload não funciona. O se testa se a chave existir, ou seja se for diferente de vazio (true), então houve erro. A mensagem do erro estará na chave $file("error").
		throw new Exception("Error:".$file("error")); //Gerando exceção.
		//A mensagem de erro está dentro de $file("error").
			}

	$dirUploads = "upload";
	 //var grava nome do dir que receberá os arquivos do upload.

//verificando se dir existe.
if (!is_dir($dirUploads)){
	mkdir ($dirUploads);
}

//move_uploaded_file: move do dir temporário para o diretório final, no servidor.
//Se o upload tiver êxito a função retorna true, caso contrário, false.

if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
	/*as chaves tmp_name e name existem no array global $_FILES, atribuída à variável $file. $file = $_FILES["fileupload"];

	O primeiro parâmetro diz onde está o arquivo temporário, quem dá essa einformação é a chave tmp_name.
	
	move_uploaded_file — Move um arquivo enviado para uma nova localização

	move_uploaded_file ( string $filename , string $destination ) : bool

	Esta função verifica para ter certeza de que o arquivo designado por filename é um arquivo de upload válido (que tenha sido enviado pelo mecanismo PHP de envio por POST HTTP). Se o arquivo for válido, ele será movido para o nome de arquivo dado por destination.

	Se o upload for feito com sucesso ela retorna true, caso contrário, false.
	*/
	echo "Upload realizado com sucesso.";

}else{
	throw new Exception("Não foi possível realizar upload.");
	
}


}
 ?>

