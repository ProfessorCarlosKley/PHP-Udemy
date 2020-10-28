<?php
$a = 30;
$b = 30.0;
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";
echo "a > b: ";
var_dump($a > $b);
//var_dump também checa a testagem de comparação se TRUE ou FALSE.
//Neste caso o resultado da comparação é um bool false.
//var_dump retorna o tipo e o valor da varíavel informada, neste caso a comparação.
echo "<br>";
echo "a < b: ";
var_dump($a < $b);
echo "<br>";
echo "a == b: ";
var_dump($a == $b); //aqui só compara o valor, será true.
echo "<br>";
echo "a === b: ";
var_dump($a === $b);
//compara o valor e o tipo tmb, dará false, pois apesar dos valroes serem iguais os tipos são diferentes. Int e Float.
echo "<br>";
echo "a != b: ";
var_dump($a != $b);
//Verifica se é diferente apenas o valor
//Para verificar se o tipo é diferente também usamos:
echo "<br>";
echo "a !== b: ";
var_dump($a !== $b);

echo "<br>";
echo "<br>";
echo "<br>";
echo "Operador novo php 7 - a <=> b: ";
echo "<br>";
var_dump($a <=> $b);
//Se o a for maior retorna     1;
//Se o a for menor retorna   - 1;
//Se forem iguais retorna      0;
