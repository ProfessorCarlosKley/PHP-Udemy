<?php 
$email = $_POST["inputemail"];
echo $email;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
"secret"=> "6LdQa3AaAAAAAC9NLR1fEyyobcfEUWlL1VYJIQ58",
/*É a chave secreta.*/
"response"=> $_POST["g-recaptcha-response"],
"rooteip"=> $_SERVER["REMOTE_ADDR"]
)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);
curl_close($ch);

if ($recaptcha["success"]===true){
	echo "ok: " .$_POST["inputemail"];
}
 ?>