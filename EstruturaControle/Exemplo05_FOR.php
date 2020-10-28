<?php
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "De 0 a 1000 de 5 em 5";

for ($x = 0; $x <= 1000; $x += 5) {
    echo $x . " ";
}
echo "<br>";
echo "<br>";
echo "De 0 a 1000 ignorando o intervalo de 200 a 800";
echo "<br>";
echo "<br>";
for ($x = 0; $x <= 1000; $x++) {
    if ($x > 200 && $x < 800) continue;
    echo $x . " ";
}

echo "<br>";
echo "<br>";
echo "De 0 a 1000 ignorando o intervalo de 300 a 500 e parando em 900.";
echo "<br>";
echo "<br>";
for ($x = 0; $x <= 1000; $x++) {
    if ($x > 200 && $x < 800) continue;
    if ($x === 900) break;
    echo $x . " ";
}
