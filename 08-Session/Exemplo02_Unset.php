<?php
require_once("Config.php");
echo $_SESSION['nome']; 
session_unset($_SESSION['nome']);


#	Limpa a variável de seção nome. 

#	Mas no site que iniciou a seção as informações continuam.

#	Se colocarmos $_SESSION sem indicar a chave, todas as variáveis de seção serão apagadas.

#	unset limpa as variáveis mas você continua existindo (sessão) nquele site.

#	session_destroy limpa as variáveis e remove o usuário (Cancela a sessão). Se dermos um F5 é como se estivéssimos criado um novo acesso no servidor.




