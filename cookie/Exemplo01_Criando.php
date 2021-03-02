<?php 

/*- Cookie é um arquivo na máquina do usuário para conter algumas informações.
  - Cookies são persistentes, ele pode existir mesmo que o usuários saia do browser e desligue a máquina, por exemplo.
  - 

*/

$data = array(
"Empresa" => "CARVALHO SISTEMAS",
"Desenvolvedor" => "PROFESSOR CARLOS KLEI"
);

//o terceiro parâmetlro é o tempo de duração do cookie, em timstamp.
//Neste exemplo durará 1h 3600s
setcookie("NOME_DO_COOKIE", json_encode($data), time()+ 3600);
echo "Cookie criado com sucesso!";

 ?>