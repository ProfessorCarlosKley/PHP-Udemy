<?php
require "Somar.php";
require "Funcoes/Multiplicar.php";

echo "R E Q U I R E";
echo "<br>";

$resultado = somar(10, 20);
echo $resultado . " (Soma)";
$resultado2 = multiplicar(10, 20);
echo "<br>";
echo $resultado2 . " (Multiplicação)";
/*
 - require exige a existência do arquivo e que o mesmo esteja funcionando  corretamente,	caso contrário ele gera erro fatal e para a execução do ódigo.
 - O include tenta rodar (funcionar) o resto do código mesmo que o arquivo não exista ou * tenha algum tipo de problema.

 - O include tem mais recursos. Existe um diretório chamado includepath que permite que o include traga arquivos direto de lá. Esse diretóri por padrão é configurado no php.ini. Se por exemplo chamarmos somar.php, o include procurará na pasta corrente, se não achar ele procurará na pasta que foi configurada no arquivo php.ini

 - Se tivermos vários desenvolvedores utilizando arquivos iguais por exemplo funcoes.php cada um com copia em sua máquina, poderá ocorrer que uns autalizem ou não esse arquivo. O ideal seria entção um path único para que todos usem o mesmo aquivo. Apenas um arquivo php dentro de uma pasta padrão.

 - Mas se por acaso esse não seja nosso caso o mais ideal é utilizar o require que exige que a existência do arquivo.

 - Um recurso perigoso do include é o include remote que permite trazermos um arquivo de um site. Ou seja, podemos incluir arquivos maliciosos a partir de outro domínio./*
