<?php
session_start(); //Iniciando a sessão.

/* - A ideia é que nesse config tenhamos uma série de instruções inclusive session_start; isso evita chamarmos toda hora se optarmos em trabalhar com secões.# a vantagem é que basta chamar esse arquivo e incorporar todas as configurações.

Após iniciada uma sessão, todas as páginas dessa sessão reconhecerá as globais definidas. No nosso exemplo a chave nome definida em exemplo01*/


/* IMPORTANTE LER:
	- Por padrão o PHP está configurado para não iniciar automatiacmente as seções. Por isso, utilizamos session_start() informando ao PHP que queremos trabalhar com seções.

	- $_SESSION funciona agora como um array super-global, que será utilizao e reconhecido em outro arquivo. Outra secção.

	- Session_start pode ser configurado no php.ini como auto. Porém é iteressante sempre utilizar a inicialização manual.

	- nome é uma chave do array global SESSION.

	- As variáveis de seções se assemelham às globais.

	- Quando o usuário acessa um site na internet, uma secção é criada entre esse usuário e o servidor.

	- Quando acessamos por exemplo, google.com ele cria um arquivo de texto temporário em nossa máquina e um no servidor e amarra as informações. Essa é a nossa seção com aquele site. 
	
	- As secções duram normalmente 20 min, mas,pode ser reduzida. Inclusive podermos quebrar a secção a qualquer momento, é o que os sites de bancos fazem quando detecta inatividade no site.

	- Se o nível de segurança do navegador estiver no máximo, as variáveis de sessões não funcionarão. Pois não será permitido que o site crie os arquvios de sessões na máquina.

	- Se um hacker desobre o id de sessão ele pode acessar com o ide de outro terminal mas, mantendo as credenciais deste id, por exemplo.

	- Por isso, site de vendas e outros que precisam de extrema segurança, utilizam https que dentre outras coisas criptografam inclusive o id de sessão.

	- Por segurança, depois de uma tela de login, é interessante gerar um novo id, com isso, o id utilizado para conexão (login) será substituído por outro após o login. E, se alguém tentar o id anterior não conseguirá acessar as credenciais.


*/
?>
