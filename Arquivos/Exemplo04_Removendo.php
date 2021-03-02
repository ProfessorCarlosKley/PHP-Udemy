<?php 
$file = fopen("lixo.txt", "w+");

fclose($file);

unlink("lixo.txt"); //unlink exclui arquivos.

echo "Arquivo removido com sucesso.";


 ?>