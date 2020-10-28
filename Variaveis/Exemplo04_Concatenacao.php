<?php
$nome = "CARLOS KLEI";
$sobrenome = "CARVALHO DE MOURA";
$nomeCompleto = $nome . " " . $sobrenome;
//concatenação no php faz-se com o ponto, isso se deve porque a convenção de tipos é feita automaticamente, portanto se for concatentar com mais ele tentará somar.

if (isset($nomeCompleto)) { //Verifica se a variável existe.
echo "Nome: $nomeCompleto";
echo "<br>";
}
else
{
	echo "<br>";
	echo "A variável nome não existe mais.";
}
exit; //para o código a partir deste ponto, como exit sub.
echo "Essa linha não será exibida.";

/*Tipos de dados php:
- Tipos Básicos:
  String, inteiros, booleanos.
- Tipos compostos:
  Array e objetos.



*/
?>