<?php
//Obtem ip.
$ip = $_SERVER["REMOTE_ADDR"];
//Nome da página acessada.
$nome = $_SERVER["SCRIPT_NAME"];
echo $ip;
echo $nome;
?>