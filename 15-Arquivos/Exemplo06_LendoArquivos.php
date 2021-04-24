<?php 
//Esse código ler o arquivo usuarios.php criado no Exemplo04.

$filename = "usuarios.csv";

if (file_exists($filename)) {
//não usamos o + porque ja estamos verificando a existência do arquivo.

	$file = fopen($filename, "r"); //r = Abrindo modo leitura.

	$headers = explode(",", fgets($file));
	//fgets pega 1ª linha do arquivo. Explode baseando no separador (,).
	//explode retorna um array.

	/*var_dump($headers);

	- Antes de explode, retorna:
		string(40) "Idusuario,Deslogin,Dessenha,Dtcadastro "
	- Depois de explode, retorna:
		array(4) {[0]=> string(9) "Idusuario" [1]=> string(8) "Deslogin" [2]=> string(8) "Dessenha" [3]=> string(12) "Dtcadastro " }
	- fgets retorna um linha de texto, se ela existir, logo, rotorna true.
	- no final, se não exisitir mais linhas, retorna false.
	*/

	$data = array();

	while($row = fgets($file)){
	//Se fgets retornar false, sai do while. Pois, while executa enquanto for true.
	//while só percorre as linhas.
	//fgets ler linha por linha do arquivo já com fread(handle, length) precisamos passar quantos bytes queremos ler desse arquivo.
	//while percorrerá as linhas do arquivo. Caso não exista mais, retorna false.

	$rowData = explode(",", $row);
	//explode considera a vírgula como delimitador no arquivo csv lido.
	//logo, toda vez que encontrar uma vírgula ele explode. (na linha).
	$linha = array();

	//O explode transformou o headers num array linha (um vetor)
	//portanto vamos percorrê-lo.
	//percorrendo a coluna das linhas explodidas.
	for ($i = 0; $i < count($headers); $i++){
			$linha[$headers[$i]] = $rowData[$i];
			//rowData também foi explodida e transformada num array.
			//rowData são as linhas abaixo do cabeçalho. ($row=fgets($file).
			//$linha[$headers[$0]] corresponde ao idusuario do array linha. Coluna id.  A explosão na linha se dá com o separador vírgula.
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

- fread — Leitura binary-safe de arquivo.
	fread ( resource $handle , int $length ) : string.

	fread() lê até length bytes do ponteiro de arquivo informado em handle. A leitura é interrompida quando uma das seguintes condições são satisfeitas:

	length bytes foram lidos
	EOF (end of file - final do arquivo) é alcançado
	um pacote tornou-se disponível (para network streams)
	8192 bytes foram lidos (depois de abrir um stream)

	Além do mais, com fread dizemos quantos bytes queremos retornar, por exemplo se eu disser 50 bytes de retorno será retornado 50 caracteres por exemplo, cada caracter um byte.

	-----------------------------------------------------------------------------
- fgets — Lê uma linha de um ponteiro de arquivo:
	fgets ( resource $handle , int $length = ? ) : string
	Retorna uma linha do ponteiro do arquivo..
*/
	
 ?>