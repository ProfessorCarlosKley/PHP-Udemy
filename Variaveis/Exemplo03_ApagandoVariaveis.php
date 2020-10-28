<?php
$nome = "Nome a definir...";
$idade = 0;
echo "Nome: $nome";
echo "<br>";
echo "idade: $idade anos";

unset ($nome, $idade); //apagando variável da memória;

if (isset($nome)) { //Verifica se a variável existe.
echo "Nome: $nome";
echo "<br>";
}
else
{
	echo "<br>";
	echo "A variável nome não existe mais.";
}
?>