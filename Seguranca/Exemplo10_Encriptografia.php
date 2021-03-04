<?php 
/*
* Algorítmos suportados: PASSWORD_DEFAULT, PASSWORD_BCRYPT, PASSWORD_ARGON2I;
*/
$password = 'utuuunsssalvador';
$passHash = password_hash($password,PASSWORD_BCRYPT);
//Função que fará a criptografia da senha. Segundo argumento é o algoritmo utilizado.
echo "Senha informada: " . $password;
echo "<br>";
echo "Senha cruotigrafada: " . $passHash;


ECHO "<br>";
ECHO "<br>";

echo "VERIFICANDO SE A SENHA INFORMADA É A MESMA QUE ESTÁ CRIPTOGRAFADA: <br>";
$verifica = password_verify($password, $passHash);
//verifica a senha digitada com a senha criptografada no banco.

ECHO "<br>";
ECHO "<br>";

if ($verifica==1){ //ou if ($verifica), apenas.
	echo "Senha correta. Acesso permitido.";
}else{
	echo "Senha correta. Acesso negado.";
}

 ?>