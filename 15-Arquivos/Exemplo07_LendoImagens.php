<?php 
//lendo arquivos imagens.
$filename = "logo.png";
$base64 = base64_encode(file_get_contents($filename));

/*
- file_get_contents ler conteúdo inteiro de um arquivo.
- O conteúdo retornado é binário. Estamos lendo uma imagem.
- Neste caso utilizamos base64_encode, para convertê-lo em string (renderizar).
- Como conteúdo retornado é binário, usamos base64_encode para converter em string.
*/
$fileinfo = new finfo(FILEINFO_MIME_TYPE); 
//finfo é um classe que usamos para pegar informações do arquivo.
//FIINFO_MIME_TYPE constante da classe finfo para retorno do tipo do arquivo.

$mimetype = $fileinfo -> file($filename);
//Pegando nome do arquivo com método file da classe finfo


//Montando padrão de execução do base64.

//echo "data:image/png; base64,".$base64;

//Antes de usar a classe finfo tinhamos que indicar o tipo do arquivo também.
//A linha abaixo monta o padrão de execução de base64. Para ser usado como texto ou uma string numa url ou link. Para isso: precisamos de um padrão, formato específico:
//o formato é data dois pontos. o tipo do arquivo, depois base64, uma vírgula e o conteúdo (que é a string da imagem conertida em $base64) Segundo modelo ao lado. "data:image/png; base64,".$base64;
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

