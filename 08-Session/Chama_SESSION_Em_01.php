<?php
require_once("Config.php");

//session_unset($_SESSION['nome']);
#Limpa a variável de seção. Mas no site que iniciou a seção as informações continuam.
#Se colocarmos $_SESSION sem indicar a chave, todas as variáveis de seção serão apagadas.


echo $_SESSION['nome']; 
//O exemplo_01 tem que ser rodado antes para atribuir valor à chave nome.
//Ao executar esse arquivo, a seção é destruida abaixo, portanto, se atualizarmos a página, 

session_destroy();
#Limpa a variável de seção nome. 
#Mas no site que iniciou a seção as informações continuam.
#Se colocarmos $_SESSION sem indicar a chave, todas as variáveis de seção serão apagadas.
#unset limpa as variáveis mas você continua existindo (sessão) nquele site.
#session_destroy limpa as variáveis e remove o usuário (Cancela a sessão). Se dermos um F5 é como se estivéssimos criado um novo acesso no servidor.

/*
	- Por padrão o PHP está configurado para não iniciar automatiacmente as seções. Por isso, utilizamos session_start() informando ao PHP que queremos trabalhar com seções.
	- $_SESSION funciona agora como um array super-global, que será utilizao e reconhecido em outro arquivo. Outra secção.
	- Session_start pode ser configurado no php.ini como auto. Porém é iteressante sempre utilizar a inicialização manual.
	- nome é uma chave do array global SESSION.
	- As variáveis de seções se assemelham às globais.
	- Quando o usuário acessa um site na internet, uma secção é criada entre esse usuário e o servidor.
	- Quando acessamos por exemplo, google.com ele cria um arquivo de texto temporário em nossa máquina e um no servidor e amarra as informações. Essa é a nossa seção com aquele site. 
	- As secções duram normalmente 20 min, mas,pode ser reduzida. Inclusive podermos quebrar a secção a qualquer momento, é o que os sites de bancos fazem quando detecta inatividade no site. 

	- Se o nível de segurança do navegador estiver no máximo, as variáveis de sessões não funcionarão. Pois não será permitido que o site crie os arquvios de sessões na máquina.
*/
