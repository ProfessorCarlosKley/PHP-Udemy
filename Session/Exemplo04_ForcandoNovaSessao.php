<?php
require_once("Config.php");
session_regenerate_id();
echo "Novo ID de seção gerado: ";
echo session_id();
echo "<br>";
var_dump($_SESSION);
