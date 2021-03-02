<?php 

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);
//content recebe o conteúdo binário do arquivo.
//Será usada para escrever o arquivo e montar a imagem.
//file_get recebe tanto endereço local como uma url.
//aqui se usarmos var_dump receberemos símbolos representando binário do arquivo, ilegíveis.

$parse = parse_url($link);
//Nesse momento já recebemos um array com informações do arquivo.
/*No caso desta imagem do google, var_dump retornará:
array(3) { ["scheme"]=> string(5) "https" ["host"]=> string(17) "www.google.com.br" ["path"]=> string(60) "/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" }*/

// - Pegando a última parte do path, string depois da última barra. googlelogo_color_272x92dp.png, para isso, utilizamos basename.
// - Serve para utilizarmos esse nome para salvarmos na pasta no download.

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
//Se quisessemos um nome específico e não o mesmo do arquivo baixado, poderíamos informar entre aspas no lugar de $basename.

fwrite($file, $content);
//Escreve no arquivo criado o binário correspondente à imagem.

fclose($file);

 ?>

 <img src="<?=$basename?>">
 <!-- basename é o nome do arquivo e agora é chamado da pasta que foi salva (local), não da url.-->