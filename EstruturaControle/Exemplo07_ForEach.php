<?php
$meses = array(
    "JANEIRO", "FEVEREIRO", "MARÇO",
    "ABRIL", "MAIO", "JUNHO",
    "JULHO", "AGOSTO",
    "SETEMBRO", "OUTUBRO",
    "NOVEMBRO", "DEZEMBRO"
);

foreach ($meses as $mes) {
//percorre um array coleção e para cada item que encontrar ele cria uma var representando esse valor. Portanto, cada mês encontrado será armazenado em $mes.

    echo "O mês é: " . $mes . "<br>";
}
echo "<br>";
echo "<br>";
//trazendo também o index do elemento correspondente.
foreach ($meses as $index => $mes) {
    // => Usado em arrays.
    echo "Índice: " . $index;
    echo " - Mês: " . $mes . "<br>";
}

//foreach indicado para arrays e coleções.
