<?php 

/*
	- Cookie é um arquivo de texto de pequeno tamanho onde armazenamos informações.
		Essas informações podem ser por exemplo, o usuário que está autenticado no sistema, ai geramos um cooke para toda vez que ele voltar não precisar logar novamente.  
	- Cookies são persistentes, ele pode existir mesmo que o usuários saia do browser e desligue a máquina, por exemplo.
  	-  Ao criar cookies somos obrigados por convenção das regras da internet a dizer quando é que esse arquivo expira (sai da máquina do usuário).  Faz sentido uma vez que estamos criando um arquivo na máquina do usr sem que ele peça, e sendo assim temos que dizer quando ele sairá.
  	- O Cookie é parecido com uma session, porém, a session encerra automaticamente após um certo tempo definido pelo navegador. O cookie nós estabelecemos um tempo e o arquivo ainda passará a existir mesmo que reiniciemos o computador.
  	- Um exemplo da ação do cookie é o carrinho de compra de uma loja. Quand voltamos no site nosso carrinho ainda está com a compra caso não finalizemos.

	- Uma coisa interessante é que os cookies podem ser usados por empresas de terceiro para conseguir informações de suas consultas (pesquisas) por exemplo, dai essas informações são passadas para outros sites (comerciais), por isso às vezes quando acessamos aluguns sites aparecem propagandas de coisas que já procuramos antes. Conhecidos como serviços de Remarketing, devido à nossas pesquisas eles sabem por exemplo se somos um potencial cliente de determinado produto.
*/

$data = array(
"Empresa" => "CARVALHO SISTEMAS",
"Desenvolvedor" => "PROFESSOR CARLOS KLEI"
);

/*
	- O primeiro parâmetro é o nome do cookie, que neste exemplo colocamos NOME_DO_COOKIE.
	- O segundo são as informações que desejamos armazenar.
	- O terceiro parâmetlro é o tempo de duração do cookie, em timstamp.
	- Neste exemplo durará 1h 3600s. Se não for especificado dura o tempo que o navegador estiver aberto.

*/
setcookie("NOME_DO_COOKIE", json_encode($data), time()+ 3600);
echo "Cookie criado com sucesso!";

 ?>