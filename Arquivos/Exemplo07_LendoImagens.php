<?php 
//lendo arquivos imagens.
$filename = "logo.png";
$base64 = base64_encode(file_get_contents($filename));

/*
- file_get_contents ler conteúdo inteiro de um arquivo.
- O conteúdo retornado é binário. Estamos lendo uma imagem.
- Neste caso utilizamos base64_encode, para convertê-lo em string (renderizar).
*/
$fileinfo = new finfo(FILEINFO_MIME_TYPE); 
//FIINFO_MIME_TYPE método da classe finfo para retorno do tipo do arquivo.
$mimetype = $fileinfo -> file($filename);

//Montando padrão de execução do base64.
//echo "data:image/png; base64,".$base64;
//Antes de usar a classe finfo tinhamos que indicar o tipo do arquivo também.

$base64encode = "data:" . $mimetype . ";base64,".$base64;
 ?>

 <a href = "<?=$base64encode?>" target="_blanck">Link para Imagem.</a>
 <!-- 
Não precisamos indicar ?php, basta < com ?.
Se usássemos < ? php, teríamos que usar echo.
 -->
 <br>
 <br>
<!--
	imagem renderizada exibida no navegador. Se olharmos no 	
-->
 <img src="<?=$base64encode?>" alt="" width="200" height="200">

