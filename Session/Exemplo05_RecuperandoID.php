<?php
session_id('s3n17pn06u0kbu6b6gj45cqij2');
require_once("Config.php");
//Recuperando um id inicializado por outro navegador.
//Lembrando que sempre temos que executar o exemplo01 para criar uma session.
echo session_id();
echo "<br>";
var_dump($_SESSION);
