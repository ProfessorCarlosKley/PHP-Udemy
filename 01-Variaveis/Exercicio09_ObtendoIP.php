<?php
//Obtem ip.
$ip = $_SERVER["REMOTE_ADDR"];
//Nome da página acessada.
$nome = $_SERVER["SCRIPT_NAME"];
echo "IP:" . $ip;
echo " Esse resultado estranho para o IP se dá ao fato de não termo um ip de fato, estamos executando do localhost. Por isso, acontece isso. Se tivesse na internet e alguém acessando o site, veríamos o ip da pessoa.";

echo "<br>";
echo "<br>";
echo "Nome do Arquivo: " . $nome;
?>