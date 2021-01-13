<?php

function __autoload($nomeClass){
/* $nomeClass parâmetro que recebe nome da classe chamada automaticamente.
Neste caso DelRey, instanciada abaixo. Portanto, ao perceber que ela extende de automóvel, implementa automóvel, __autload novamente percorre a pasta em busca agora de automovel.php
*/
var_dump($nomeClass);    
    require_once("$nomeClass.php");
    //.php é necessário pois nomeClass só retorna o nome da classe, logo precisamos ter o .php para formar o nome do arquivo da classe.

    echo "<br>";

    /*var_dump($nomeClass); com esse var_dump percebemos o que tem em $nomeClass ao definirmos $carro = new DelRey(); logo abaixo. 
    Ou seja, a função __autoload automaticamente procura NA MESMA PASTA arquivo de mesmo nome da classe DelRey() já que ela não foi defnida nesse módulo. ogo, vamos utilizar a função de inclusão colocando como parâmetro o valor de $nomeClass.

    - A classe DelRey extende de Automovel, a função __autoload já detecta isso e procura depis que acha o arquivo DelRey.php, o arquivo Automovel.php. uma vez que a classe DelRey menciona a classe Automovel.

    -   
    Tudo isso pode ser visto com var_dump();
    */
}

$carro = new DelRey();
echo $carro -> acelerar(100);
echo $carro -> desacelerar(20);
echo $carro -> trocarMarcha(5);
echo $carro -> empurrar();
/* - classe definida em <DelRey class="php"
- essa classe terá que ser encontrada em seu arquivo físico DelRey.php, isso acontece com a função __autoload*/

/**Este arquivo chamará  as classes Automovel no arquivo Automovel.php e DelRey no arquivo DelRey.php
 * 
 * 
*/

?>
