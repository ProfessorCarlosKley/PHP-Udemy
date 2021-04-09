<?php
$meses = array(
    "JANEIRO", "FEVEREIRO", "MARÇO",
    "ABRIL", "MAIO", "JUNHO",
    "JULHO", "AGOSTO",
    "SETEMBRO", "OUTUBRO",
    "NOVEMBRO", "DEZEMBRO"
);
foreach ($meses as $mes) {
//percorre um array ou coleção e para cada item que encontrar ele cria uma var contendo esse valor. Portanto, cada mês encontrado será armazenado na variável $mes.
    echo "O mês é: " . $mes . "<br>";
}
echo "<br>";
echo "<br>";
//trazendo também o index (posição) do elemento correspondente no array.
foreach ($meses as $index => $mes) {
    // => Usado em arrays.
    echo "Índice: " . $index;
    echo " - Mês: " . $mes . "<br>";
}
//foreach (para cada) indicado para arrays e coleções.
