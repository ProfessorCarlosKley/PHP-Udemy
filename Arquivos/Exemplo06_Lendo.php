<?php 

$filename = "usuarios.csv";

if (file_exists($filename)) {

	$file = fopen($filename, "r"); //r = Modo leitura.

	$headers = explode(",", fgets($file));
	//fgets pega 1ª linha do arquivo. Explode baseando no separador (,).

	/*var_dump($headers);
	- Antes de explode, retorna:
	string(40) "Idusuario,Deslogin,Dessenha,Dtcadastro "
	- Depois de explode, retorna:
	array(4) { [0]=> string(9) "Idusuario" [1]=> string(8) "Deslogin" [2]=> string(8) "Dessenha" [3]=> string(12) "Dtcadastro " }*/

	/*
	- fgets retorna um linha de texto, se ela existir, logo, rotorna true.
	- no final, se não exisitir mais linhas, retorna false.
	*/

	$data = array();

	while($row = fgets($file)){
	//Se fgets retornar false, sai do while. Pois, while executa enquanto for true.
	//while só percorre as linhas.

	$rowData = explode(",", $row);
	$linha = array();

	//O explode transformou o headers num array linha (um vetor)
	//portanto vamos percorrê-lo.
	for ($i = 0; $i < count($headers); $i++){
			$linha[$headers[$i]] = $rowData[$i];
			//rowData também foi explodida e transformada num array.
			//rowData são as linhas abaixo do cabeçalho. ($row=fgets($file).
		}

		array_push($data, $linha);
	}
	fclose($file);
	echo json_encode($data);
}


/*
- implode: Retorna uma string a partir de um array na mesma ordem com uma ligação (separador) entre cada elemento.
- explode: faz o inverso de implode, retorna um array a partir da string.
- Arquivos csv usam separador, o padrão é uma vírgula.
- Até aqui já temos a primeira linha (cabeçalho) de nosso csv.
*/
 ?>