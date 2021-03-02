<?php 

$file=fopen("log.txt", "a+");
//a = Preserva conteúdo e escreve no final. 
//+ = criar caso ele não exista.
//Ver manual php. Tem salvo na pasta udemy ManipulacaoArquivos.html

fwrite($file, date("Y-m-d H:i:s"). "\r\n");
//Escrevendo no arquivo. \r = return, \n = nova linha
//após escrever, fechamos o arquivo da memória
fclose($file);

echo "Arquivo editado com sucesso.";

/*
'r'		Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.

'r+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.

'w'	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

'w+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

'a'	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

'a+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

'x'	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).

'x+'	Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).

*/
 ?>