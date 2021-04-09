<?php
//Tipos básicos: string, inteiros, boleanos e flutuante.
$nome = "CARLOS KLEI CARVLAHO DE MOURA";
$site = "www.karloskley.com.br";
$ano = 1976;
$salario = 5500.00;
$bloqueado = true;
$padrao = 'A';
////////////////////////////////////////////
//Tipos compostos: arrays e objetos.

//Array.
$frutas = array("Abacaxi","Laranja", "Manga", "Uva","Banana");

//Objetos: objetos são instâncias de uma determinada classe.
$data = new DateTime();

var_dump($data);
echo "<br>";
//Utilize CTRL+U para ver o array correspondente ao objeto data mais organizado.

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
//Retornando conteúdo do Array.
echo "Fruta preferida: $frutas[3]";
echo "<br>";
echo "Registro consultado em:";
echo date('d/m/Y');
echo ".<br>";

//Tipos Especiais: resorce e null. ///////////////////////////////////////
//fopen é um tipo resorce. 
$arquivo = fopen ("Exemplo05_TipoDeDados.php", "r");
echo "fopen: ";
var_dump($arquivo);
?>
