<?php
require_once("Config.php");
use Cliente\Cadastro; //Usando namespace.
//Usando a classe cadastro de namespace Cliente.


$cad = new Cadastro();//Refere-se ao Cadastro de cliente e não ao geral

#Atributos reconhecidos porque Cadastro do namespace estende da principal.
$cad -> setNome("Carlos Klei Carvalho de Moura");
$cad -> setEmail("karloskley@hotmail.com");
$cad -> setSenha("123456");

$cad -> rgistrarVenda();
echo "<br>";

echo $cad;
/**
 * - O echo não mostra objetos, ele consegue mostrar string.
 * - Portanto, nosso objeto sabe "virar" texto, isso acontece por conta do
 *   método mágico __toString() na classe cadastro.php.
 * 
 * - Para o resultado aparecer organizado, não apenas em uma linha, tem uma extensão do chrome jsonviewer.
 * - O retorno aparece como uma codificação jsonm e cin essa extensão json_encode no navegador, esse código aparece organizado, com visibilidade bem estruturada.
 */

?>


