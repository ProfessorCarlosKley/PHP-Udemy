<?php 
$file = fopen("lixo.txt", "w+"); //w+ cria se não existir

fclose($file); //Fechando o arquivo.

unlink("lixo.txt");  
//unlink exclui arquivos. Comente a linha unlik para ver a criação depois descomente e execute novamente para ver a exclusão.

echo "Arquivo removido com sucesso.";

 ?>