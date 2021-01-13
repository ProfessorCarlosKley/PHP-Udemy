<?php
//session_start();
require_once("Config.php");
/*
- Por padrão o PHP está configurado para não iniciar automatiacmente.
- Por isso, utilizamos session_start() informando ao PHP que queremos trabalhar com seções.
- $_SESSION funciona agora como um array super-global, que será utilizaod e reconhecido em outro arquivo. Outra secção.
- Session_start pode ser configurado no php.ini como auto. Porém é iteressante sempre utilizar a inicialização manual.
*/

$_SESSION["nome"] = "Copyright CARLOS KLEI CARVALHO DE MOURA";
//nome é uma chave do array global SESSION.
