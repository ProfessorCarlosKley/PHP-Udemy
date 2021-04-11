<?php
require_once("Config.php");

session_regenerate_id(); //Gera um novo id de sessão.

echo "Novo ID de seção gerado: ";
echo session_id();
echo "<br>";

var_dump($_SESSION);
//Visualiza todo o array superglobal, este foi definido no exemplo 01.

