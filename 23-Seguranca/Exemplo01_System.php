<?php 
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");


echo "<pre>";
$comando = system("dir C:", $retorno);
//$retorno, armazena os passos dos acontecimentos.
//system já mostra automaticamente na tela o retorno.
//exec não mostra.
echo "</pre>";
 ?>