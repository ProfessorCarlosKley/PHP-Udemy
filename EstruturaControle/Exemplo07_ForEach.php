<?php
$meses = array(
    "JANEIRO", "FEVEREIRO", "MARÇO",
    "ABRIL", "MAIO", "JUNHO",
    "JULHO", "AGOSTO",
    "SETEMBRO", "OUTUBRO",
    "NOVEMBRO", "DEZEMBRO"
);

foreach ($meses as $mes) {
    //percorre o array e para cada item que encontrar ele cria uma var representando.
    echo "O mês é: " . $mes . "<br>";
}
echo "<br>";
echo "<br>";
//trazendo o index do elemento correspondente.
foreach ($meses as $index => $mes) {
    //percorre o array e para cada item que encontrar ele cria uma var representando.
    echo "Índice: " . $index;
    echo " - Mês: " . $mes . "<br>";
}
//foreach indicado para arrays e coleções.
