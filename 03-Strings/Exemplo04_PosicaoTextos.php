<?php
$frase = "A repetição é mãe da repetição.";
$palavra = "mãe";
$q = strpos($frase, $palavra);
/*strpos — Encontra a posição da primeira ocorrência de uma string.
	https://www.php.net/manual/pt_BR/function.strpos.php
*/
echo($q);
//retorna 17; Entendi: A palavra mãe termina na posição 17 da string.

echo "<br>";
$texto = substr($frase, 0, $q);
//retorna o texto de $frase a partir do indice (posição) zero até a posição retornada em $q (17);

echo "Escrevendo texto antes de mãe: " . $texto;

echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
/*mãe começa na posição $q, logo somamos $q com comprimento de $palavra para imprimir a partir de mãe até comprimento final de frase.

substr: 1 - onde queremos subtrair a string;
        2 - início da subtração; iniciar em mãe + 3 posições, $q + strlen($palavra)
        3 - até onde desejamos; até o final da frase (posição final) strlen($frase)

*/
echo "Escrevendo a partir de mãe: " . $texto2;
echo "<br>";
