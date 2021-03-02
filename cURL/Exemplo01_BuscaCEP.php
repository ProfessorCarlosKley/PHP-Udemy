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
- cURL permite o PHP conversar com várias tecnologias.
- O cURL é uma ferramenta para criar requisições em diversos protocolos (incluindo HTTP, HTTPS e FTP, entre muitos outros) e obter conteúdo remoto.
*/

if (isset($_GET['vcep'])){
$cep = $_GET["vcep"];
$link = "https://viacep.com.br/ws/$cep/json/";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//CURLOPT_RETURNTRANSFER diz que esperamos um retorno.
//1 para indicar que vai a solitictação e volta (retorno);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//Para chamadas https, sem essa linha de verificação só funciona com http normal.

$response = curl_exec($ch); //recebe a resposta em json.

curl_close($ch);

$data = json_decode($response, true);
//json_decode transforma a resposta em json num array. O true, é para transformar em array, senão decodifica e deixa como objeto.

//print_r($data)["chave"]; ou sem chaves para todos.

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