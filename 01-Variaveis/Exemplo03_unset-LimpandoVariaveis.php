<?php
$nome = "Carlos Klei";
$idade = 40;
echo "Nome: $nome";
echo "<br>";
echo "idade: $idade anos";
echo "<br>";
echo "<br>";
echo ":: Segunda tentativa de imprimir a variável nome após uso de unset.";
unset ($nome, $idade);
//unset — Destrói a variável especificada. php.net/manual.
echo "<br>";
if (isset($nome)) { 

//isset — Determina se uma variável é declarada e é diferente de nula.
	//php.net/manual. Resumindo: Verifica se a variável existe.

echo "Nome: $nome";
echo "<br>";
}
else
{
	echo "<br>";
	echo "A variável nome não existe mais.";
}
?>