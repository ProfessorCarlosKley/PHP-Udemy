<?php
$frase = "A repetição é mãe da repetição.";
$palavra = "mãe";
$q = strpos($frase, "mãe");
//retorna posição da palavra na frase e rerorna seu índice.
var_dump($q); //retorna 17;
//Escrevendo a partir de mãe para trás.
echo "<br>";
$texto = substr($frase, 0, $q);
//retorna o texto de $frase a partir do indice (posição) zero até a posição retornada em $q (17);
echo $texto;
echo "<br>";
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
/*mãe começa na posição $q, logo somamos $q com comprimento de $palavra para imprimir a partir de mãe.
substr: 1 - onde queremos subtrair a string;
        2 - início da subtração; iniciar em mãe + 3 posições, $q + strlen($palavra)
        3 - até onde desejamos; até o final da frase (posição final) strlen($frase)

*/
echo $texto2;
echo "<br>";
