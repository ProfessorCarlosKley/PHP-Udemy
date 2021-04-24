<?php 

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);
/* 
	- content recebe o conteúdo do arquivo em binário.
	- Será usada para escrever o arquivo e montar a imagem.
	- file_get recebe tanto endereço local como uma url.

	- aqui se usarmos var_dump receberemos símbolos representando binário do arquivo, ilegíveis.

	- Este recurso permite que o php pegue o conteudo (código binário) do arquivo de um servidor e reproduza para outro usuário que solicite sem necessariamente armazenar no su próprio servidor.

	- A ideia é de que o usuário ao solicitar ao php que está num determinado servidor uma imagem por exemplo de outro servidor em outro local, o php seja capaz de não necessariamente baixar o arquivo para depois enviar, apenas ler e converte em binário para ser devolvido ao solicitante.*/

$parse = parse_url($link);
/*
	- Nesse momento já recebemos um array com informações do arquivo.
	- Parse_url transforma o que está vindo da url em um arquivo real.
	- Já tarnsofomou em um arquivo e var_dump retornará um array com informações deste arquivo.

	- No caso desta imagem do google, var_dump, nesse momento, após parse, retornará o array:

	array(3) { ["scheme"]=> string(5) "https" ["host"]=> string(17) "www.google.com.br" ["path"]=> string(60) "/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" }

	*/

	// - Pegando a última parte do path, string depois da última barra. googlelogo_color_272x92dp.png, para isso, utilizamos basename.
	// - Serve para utilizarmos esse nome para salvarmos na pasta no download. Para isso usamos basename.

$basename = basename($parse["path"]);

$file = fopen($basename, "w+"); //w+cria se hão houver.
//Se quisessemos um nome específico e não o mesmo do arquivo baixado, poderíamos informar entre aspas no lugar de $basename.

fwrite($file, $content); //content é o binário recebido acima.
//Escreve no arquivo criado o binário correspondente à imagem.

fclose($file);

 ?>

 <img src="<?=$basename?>">
 <!-- basename é o nome do arquivo e agora é chamado da própria pasta do nosso servidor, que foi salva (local), não da url.
	php abre e fecha na mesma linha, neste caso o = é o primeiro comando, quando isso acontece, o igual substitui o comando echo. Enão, estamos dizendo, escreva basename.

 -->