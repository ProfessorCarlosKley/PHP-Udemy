<?php 
/*
Este exemplo varre uma pasta e exclui os arquivos de uma pasta específica.
*/
if (!is_dir("lixo")) mkdir("lixo"); //Se DIR lixo não existir ele cria.

 foreach (scandir("lixo") as $item) {
 //varre DIR lixo e verifica se há arquivos e caso exista retorna um array.
 	if (!in_array($item, array(".", ".."))){
 		//scandir retorna um array com o conteúdo da pasta.
 		//scandir retorna o (.) e os dois pontos (..), referindo-se à pasta local e à pasta acima. Por isso devemos tirar do array.

 		unlink("lixo/".$item); //Apaga arquivo por arquivo encontrado na pasta.
 	}
 }
echo "OK";

/* OBS.:

Quem executa o php normalmente é o servidor apache, na maioria das vezes. Sendo assim, ele só vai permitir excluir os arquivos que tenham a mesma permissão que o servidor web tem. Por exemplo, não será necessários excluir pastas do sistema operacional. Isso, esperando que o servidor web não tenha essa permissão, mas, não é bom arriscar.

*/
 ?>