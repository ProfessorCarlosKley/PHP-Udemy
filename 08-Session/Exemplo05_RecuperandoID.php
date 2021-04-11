<?php
//Passando um id que desejamos recuperar...
//Este foi recuperado após ser executado o exemplo 01 ou o 04.

session_id('2muueko0bck574s9i94duh52kr');
require_once("Config.php");

//Recuperando um id inicializado por outro navegador.
//Lembrando que sempre temos que executar o exemplo01 para criar uma session.
echo session_id();
echo "<br>";
var_dump($_SESSION);
