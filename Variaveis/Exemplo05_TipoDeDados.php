<?php
//Tipos básicos: string, inteiros, boleanos e flutuante.
$nome = "CARLOS KLEI CARVLAHO DE MOURA";
$site = "www.karloskley.com.br";
$ano = 1976;
$salario = 5500.00;
$bloqueado = false;
$padrao = 'A';
////////////////////////////////////////////
//Tipos compostos: arrays e objetos.

//Array.
$frutas = array("Abacaxi","Laranja", "Manga", "Uva","Banana");

//Objetos:
$data = new DateTime();

//Tipos Especiais: resoruce e null.
//$arquivo = fopen ("Exemplo05_TipoDeDados.php", "r");
//chamaei abaixo depois de echo.


echo "Nome: $nome";
echo "<br>";
echo "Site: $site";
echo "<br>";
echo "Ano: $ano";
echo "<br>";
echo "Salário: $salario";
echo "<br>";
echo "Bloqueado: $bloqueado";
echo "<br>";
echo "Padrão: $padrao";
echo "<br>";
echo "Fruta preferida: $frutas[3]";
echo "<br>";
echo "Registro consultado em:";
echo date('d/m/Y');
echo ".<br>";

$arquivo = fopen ("Exemplo05_TipoDeDados.php", "r");
var_dump($arquivo);
?>
