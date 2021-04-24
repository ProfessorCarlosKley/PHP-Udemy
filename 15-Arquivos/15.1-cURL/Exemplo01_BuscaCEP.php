<h1>CARVALHO SISTEMAS - DESENVOLVIMENTO E SOLUÇÕES</h1>
<h2>:: Consulta CEP ::</h2>
<form>
	<input type="text" name="vcep" value="">
	<input type="submit">
</form>
<style type="text/css">
	body{
		margin:10;
		font-family: calibri;
	}
	h1{background-color:#008B8B;
		color: white;
		font-family: calibri;
		text-align: center;
	}
	h2{
	font-family: calibri;	
	}
}

</style>
<?php 

/*

A biblioteca cUrl, permite que o nosso sistema php converse com outros sistemas remotos. Essa biblioteca foi criada exatamente para isso. 
	
	- cURL permite o PHP conversar com várias tecnologias.
	- O cURL é uma ferramenta para criar requisições em diversos protocolos (incluindo HTTP, HTTPS e FTP, entre muitos outros) e obter conteúdo remoto.

A cUrl soluciona os probelmas para API'S, antigamente tinhamos bibliotecas escritas em todas as linguagens. Por exemplo, se o google tinha um serviço disponível ele tinha que cnstruir a bilioteca em php, em python, em java, ou seja em cada uma das linguagens que ele quisesses abranger. Então, toda vez que havia uma mudança, a google teria que dar suporte em todas as linguagens (bibliotecas). A cUrl resolve esse problema incluisve não importando a solicitação feita, se via ftp, ou http... ou seja, facilitou para todos.

*/

if (isset($_GET['vcep'])){

$cep = $_GET["vcep"];//recupera cep do form acima.

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link); //Initialize a cURL session.

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//CURLOPT_RETURNTRANSFER diz que esperamos um retorno.
//1 para indicar que vai a solitictação e volta (retorno);
//0 quando não querermos um retornol.

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//Para chamadas https, sem essa linha de verificação só funciona com http normal.

$response = curl_exec($ch);
//curl_exec executa o pedido e recebe a resposta em json. Exemplo do retorno nos comentários abaixo.

curl_close($ch); //Fecha curl e libera a conexão.

$data = json_decode($response, true);
// json_decode transforma a resposta em json num array.
// O true, é para transformar em array, senão decodifica e deixa como objeto.

//print_r($data)["localidade"]; ou sem chaves para todos.
//As chaves de retorno podem ser vistas no comnetário abaixo.

echo "<br>";
if (empty($data)){
	echo "CEP inexistente!";
}
else{
foreach ($data as $key => $value) {
	echo strtoupper("$key: ") . strtoupper("<b style='color:green'>$value</b><br>");
}

}


} else{
	ECHO "CEP não existe.";
}

/*JSON RETORNADO DESSE SITE E ARMAZENADO EM $response:
Consultando:
https://viacep.com.br/ws/48760000/json/

 {
cep: "48760-000",
logradouro: "",
complemento: "",
bairro: "",
localidade: "Araci",
uf: "BA",
ibge: "2902104",
gia: "",
ddd: "75",
siafi: "3341",
}
 */
 ?>