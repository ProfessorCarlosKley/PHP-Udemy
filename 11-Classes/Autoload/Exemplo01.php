<?php
/*
	- __autoload função que permite carregar as classes automaticamente.
	- $nomeClass parâmetro que recebe nome da classe chamada.
	- Neste caso DelRey, instanciada abaixo, não está definida aqui, autoload entende que deve procurar fora deste arquivo, mas na mesma pasta. Autoload só enxerga dentro do mesmo DIR.
	- Ao perceber que ela extende de automóvel, implementa automóvel, __autload novamente percorre a pasta em busca agora de automovel.php
	- A palavra chave new invoca automaticamente a função autoload, caso ela tenha sido definida e a classe não esteja no próprio arquivo, quanod isso acontece o nome da classe é passada como parâmetro para a função autoload.
	- Não precisamos chamar a função autoload, a palavra reservada new já chama essa função para nós.
	- essa classe terá que ser encontrada em seu arquivo físico, DelRey.php, isso acontece através de __autoload que fornecerá o nome da classe para o require_once.
	- DelRey.php por sua vez, chama Automovel no arquivo Automovel.php, que também será detectado através desse autoload, ou seja, ele vai armazenando os nomes da classes chamadas na variável $nomeClass (Array).
	- Quando ele incluir DelRey perceberá que essa classe extende de Automovel, ai chamará novamente o autoload passando agora o nome da classe Automovel.
*/
function __autoload($nomeClass){

	var_dump($nomeClass);

	//print_r($nomeClass);
	

    require_once("$nomeClass.php");
    echo "<br>";

    /*
    .php é necessário pois nomeClass só retorna o nome da classe, logo precisamos ter o .php para formar o nome do arquivo da classe.
    //Ao entrar na classe DelRey autoload verá que ela extende de Automovel e $nomeClass passa agora a conter o nome da classe Automóvel. Isó é verificado com var_damp().

    var_dump($nomeClass); com esse var_dump percebemos o que tem em $nomeClass ao definirmos $carro = new DelRey(); logo abaixo. 
    Ou seja, a função __autoload automaticamente procura NA MESMA PASTA arquivo de mesmo nome da classe DelRey() já que ela não foi defnida nesse módulo. ogora, vamos utilizar a função de inclusão colocando como parâmetro o valor de $nomeClass.

    - A classe DelRey extende de Automovel, a função __autoload já detecta isso e procura depis que acha o arquivo DelRey.php, o arquivo Automovel.php. uma vez que a classe DelRey menciona a classe Automovel.
    */
}

$carro = new DelRey(); //classe DelRey definida em DelRey.php.

echo $carro -> acelerar(100);
echo $carro -> desacelerar(20);
echo $carro -> trocarMarcha(5);
echo $carro -> empurrar();


?>
