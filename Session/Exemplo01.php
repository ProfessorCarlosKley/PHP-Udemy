<?php
//session_start();
require_once("Config.php");
# Por padrão o PHP está configurado para não iniciar automatiacmente.
# Por isso, utilizamos session_start() informando ao PHP
#      que queremostrabalhar com seções.
# $_SESSION funciona agora como uma global, será utilizaod e reconhecido em outro 
#      arquivo. Outra seção.
# Session_start pode ser configurado no php.ini como auto. Porém é iteressante 
#      sempre utilizar a inicialização manual.
$_SESSION["nome"] = "Copyright CARLOS KLEI CARVALHO DE MOURA";
