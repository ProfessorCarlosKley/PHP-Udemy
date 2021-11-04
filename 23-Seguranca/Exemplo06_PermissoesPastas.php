<?php 

$pasta = "Arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta);

echo "Diretório criado com sucesso!"

/*
Permissões de pastas vão de 0 a 7;

0 = nenhuma permissão;
1 = permissão de execução;
2 = permissão de gravação;
3 = 1 + 2;
4 = permissão somente leit8ura;
5 = 1 + 4
6 = 2 + 4
7 = permissão total. (Cuidado)

As premissões no UNIX seguem uma regra de três números.

Por exemplo, no unix: 775;
1º número 7, representa a permissão do dono. Permissão total.
2º número 7, representa grupos que podem ser criados. Permissão total para grupos.
3º número 5; representa outros, ou seja convidados, permissão 5.



*/
 ?>