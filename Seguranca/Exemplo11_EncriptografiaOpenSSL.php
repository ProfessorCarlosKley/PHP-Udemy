<?php 
define ('SECRET_IV', pack('a16', 'senha'));

//pack transforma uma srting em 16bits. 

define ('SECRET', pack('a16', 'senha'));

$data = [
	"nome" => "CARLOS KLEI" 
];

$openssl = openssl_encrypt(

	json_encode($data), //json encode para transformar array numa string que será encriptada.

	'AES-128-CBC', //algoritmo usado.
	SECRET,
	/*pelo que entendi ele joga a criptografia nessas constantes
		e como o todo o array é convertido em string, a primeira constante armazena a criptografia do valor da chave a segunda o criptografia da chave nome, é tanto se omitirmos SECRET_IV abaixo em decrypt só será decoficado a senha e não a chave "nome". Experimente.*/
	0, //0 = indica que só encripta e nao precisa retornar nada.
	SECRET_IV //Senha criptografada;
);

echo $openssl . "<br><br>";

//Fazenco a dicriptografia.

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
echo "<br><br>";
var_dump(json_decode($string, true)) . "<br><br>";
//decode para transfromar num array novamente, porém precisamos indicar true para isso acontecer.

 ?>