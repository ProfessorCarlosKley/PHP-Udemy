<?php
$total = 100;
$total2 = 150;
$desconto = 0.9;

do {
    $total *= $desconto;
}
//Aqui, acontece pelo menos um desconto de 10%, ainda que a condição seja falsa > 100.
while ($total > 100);
echo "$total";
echo "<br>";
echo "<hr>";
do {
    $total2 *= $desconto;
    echo "$total2";
    echo "<br>";
} while ($total2 > 100);
