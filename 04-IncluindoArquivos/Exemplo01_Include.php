<?php
include "Somar.php";
include "Funcoes/Multiplicar.php";

/* o include age como se copiasse os conteudos dos arquivos somar.php e multiplicar.php para dentro deste arquivo. No caso, as funções.*/

echo "Usando a função somar para soma de 10 + 20. A função está no arquivo soma.php. <br> 10 + 20 = ";
$resultado = somar(10, 20);


echo $resultado . " (Soma)";
echo "<br>";
echo "Usando a função multiplicar para multiplicação de 10 * 20. A função está no arquivo Multiplicar.php e dentro da pasta Funcoes. <br> 10 * 20 = ";
$resultado2 = multiplicar(10, 20);

echo $resultado2 . " (Multiplicação)";
