<?php 

$file=fopen("log.txt", "w+");
/*
	- w = write. Escrever no arquivo apaga conteúdo existente.  
	- + = criar caso ele não exista.
	- Ver manual php. Tem salvo na pasta udemy ManipulacaoArquivos.html
	- $file é uma variável do tipo resource, faz referência a um arquivo externo.
      Essas variáveis mantêm manipuladores especiais para arquivos abertos.
    - Ver manual php. Tem salvo na pasta udemy ManipulacaoArquivos.html*/

fwrite($file, date("Y-m-d H:i:s")); //Escrevendo (fwrite) a data (date) no arquivo.
//após escrever, fechamos o arquivo (o manipulador) da memória com fclose;

fclose($file);

echo "Arquivo alterado com sucesso.";

/*
- fopen — Abre um arquivo ou URL.
- fwrite — Escrita binary-safe em arquivos.
		(https://www.php.net/manual/pt_BR/function.fopen.php)

'r'	Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.

'r+' Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.

'w'	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

'w+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

'a'	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

'a+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

'x'	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).

'x+'	Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).

*/


 ?>