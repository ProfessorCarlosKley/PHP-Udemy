<?php
$cores = array("LARANJA", "AMARELO", "VERMELHO", "PRETO", "VERDE", "AZUL");
print_r($cores);
echo "<br>";
echo "<br>";
# Quando o array só tem uma dimensão, é chamado de vetor.
# Para ser array propriamente dito, teria que ter mais de uma dimensão.

//Formato antigo para criar um arry de duas ou mais dimensões.
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "FORD";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo "Carro selecionado da montadora " . $carros[0][0];
echo "<br>";
echo $carros[0][3];

echo "<br>";
echo "<br>";
echo "Último carro cadastrado na FORD: ";
echo "<br>";
echo end($carros[1]);
echo "<br>";
echo "<br>";
echo "Último carro cadastrado na GM: ";
echo "<br>";
echo end($carros[0]);
