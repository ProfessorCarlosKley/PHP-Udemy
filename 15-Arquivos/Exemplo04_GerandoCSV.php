<?php
/*Um arquivo CSV é um arquivo formatado. Cada coluna tem um tipo de informação como um registro do banco de dados, como no excel. As colunas são separadas por um delimitador que pode ser uma (,) ou (;) etc... e cada quebra de linha identifica um registro.*/
require_once ('config.php');

$sql = new Sql();//Classe Sql em Sql.php (foi criada nas aulas de DAO)

$usuarios = $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin");
//select definida em Sql. Aqui já temos uma resposta do banco, um retorno de array que pode ser visualizado com print_r

	//print_r($usuarios);

$headers = array(); //Cabeçalhos das colunas.

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key)); 
	/*	- foreach na primeira linha [0]. Para formação dos cabeçalhos do arquivo.
		- Acrescentando no array $headers apenas as chaves, serão os títulos.
		- push adicina no array $headers.
		- ucfirst primeira letra maiúscula.
		- Para formação do cabeçalho, só precisamos do primeiro registro [0].
		- Colocamos dentro de um array, pois, queremos depois usar um separador e, para isso utilizaremos uma função específica para isso. implode.

		- Até aqui esse for each retornaria com o print_r abaixo:
			Array([0]=>Idusuario [1]=>Deslogin [2] => Dessenha [3] => Dtcadastro)
			*/
}
	//print_r($headers);

	//echo implode(",", $headers); //Retorna: Idusuario,Deslogin,Dessenha,Dtcadastro - Até aqui já temos a primeir alinha do CSV.


//Acrescentando cabeçalho no arquivo.
$file = fopen("usuarios.csv", "w+"); //w+ cria caso não exista.
fwrite($file, implode(",", $headers)."\r\n");

/*
- implode: Retorna uma string a partir de um array na mesma ordem com uma ligação (separador) entre cada elemento.
- implode recebe dois parâmetros, o delimitador e o array.
- explode: faz o inverso de implode, retorna um array a partir da string.
- Arquivos csv usam separador, o padrão é uma vírgula.
- Até aqui já temos a primeira linha (cabeçalho) de nosso csv.
*/

//Alimentando com o resultado de SELECT. 
//Lembrando que usuarios é um array de registros retornados com SELECT.

foreach ($usuarios as $row) {
	//pega cada registro encontrado em usuarios e cria variável $row.
	//Um registro possui várias colunas.
	$data = array();
	//percorrendo a variável (array) $row que contém um registro (linha).
	foreach ($row as $key => $value) {
		array_push($data, $value); //acrescenta valor da coluna.
	}
	fwrite($file, implode(",", $data)."\r\n");
}

fclose($file);

 ?>