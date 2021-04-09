<?php
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "De 0 a 1000 de 5 em 5: <br> <br>";

for ($x = 0; $x <= 1000; $x += 5) {
    echo $x . " "; //apenas uma linha de instrução, nã prcisa de chaves.
}

echo "<br>";
echo "<br>";
echo "De 0 a 1000 ignorando o intervalo de 200 a 800";
echo "<br>";
echo "<br>";
for ($x = 0; $x <= 1000; $x++) {
    if ($x > 200 && $x < 800) continue;
    //continue continua o loop sem considerar a linha que contem echo.
    //continua ignorando as instruções seguintes.
    echo $x . " ";
}

echo "<br>";
echo "<br>";
echo "De 0 a 1000 ignorando o intervalo de 300 a 500 e parando em 900.";
echo "<br>";
echo "<br>";
for ($x = 0; $x <= 1000; $x++) {
    if ($x > 200 && $x < 800) continue;
    if ($x === 900) break; //Sai do laço.
    echo $x . " ";
}
/*
	For tem início e fim. Mais indicado quando sabemos o início e o fim do loop.
*/