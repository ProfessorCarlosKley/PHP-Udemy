<?php
$a = 10;
$resultado = 10 + 3 / 2 > 5 && 10 + 5 < 3;
$resultado2 = 10 + 3 / 2 > 5 || 10 + 5 > 3;

//Mostra valor de a e depois soma mais um.
echo "Valor de a: " . $a;
echo "<br>";
echo "Incrementa depois: ";
echo $a++;
echo "<br>";
echo "Depois da exibição incrementa. Valor de a depois: ";
echo $a;
echo "<br>";
echo "Incrementando antes: ";
echo ++$a;
echo "<br>";
var_dump($resultado);
echo "<br>";
var_dump($resultado2);
