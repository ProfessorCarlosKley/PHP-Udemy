<?php
session_id('3a0ald2r9au6ef6km0everrgvh');
require_once("Config.php");
//Recuperando um id inicializado por outro navegador.
//Lembrando que sempre temos que executar o exemplo01 para criar uma session.
echo session_id();
echo "<br>";
var_dump($_SESSION);
