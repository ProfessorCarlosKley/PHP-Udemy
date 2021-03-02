<?php 
require_once ('config.php');

$sql = new Sql();

$usuarios = $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
	//ucfirst primeira maiúscula.
	//Para formação do cabeçalho, só precisamos do primeiro registro [0].
}

//echo implode(",", $headers); //Resultado: Idusuario,Deslogin,Dessenha,Dtcadastro

/*
- implode: Retorna uma string a partir de um array na mesma ordem com uma ligação (separador) entre cada elemento.
- explode: faz o inverso de implode, retorna um array a partir da string.
- Arquivos csv usam separador, o padrão é uma vírgula.
- Até aqui já temos a primeira linha (cabeçalho) de nosso csv.
*/

//Acrescentando cabeçalho no arquivo.
$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers)."\r\n");

//Alimentando com o resultado de SELECT. 
//Lembrando que usuarios é um array de registros retornados com SELECT.

foreach ($usuarios as $row) {
	//pega cada registro encontrado em usuarios e cria variável $row.
	//Um registro possui várias colunas.
	$data = array();
	//percorrendo a variável $row que contém um registro.
	foreach ($row as $key => $value) {
		array_push($data, $value); //acrescenta valor da coluna.
	}
	fwrite($file, implode(",", $data)."\r\n");
}

fclose($file);

 ?>