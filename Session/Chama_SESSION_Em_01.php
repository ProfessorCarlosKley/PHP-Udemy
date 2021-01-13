<?php
require_once("Config.php");
//session_start();
# Por padrão o PHP está configurado para não iniciar automatiacmente.
# Por isso, utilizamos session_start() informando ao PHP
#      que queremostrabalhar com seções.
# $_SESSION funciona agora como uma global, será utilizaod e reconhecido em outro 
#      arquivo. Outra seção.
# Session_start pode ser configurado no php.ini como auto. Porém é iteressante 
#      sempre utilizar a inicialização manual.





echo $_SESSION['nome'];

//session_unset($_SESSION['nome']);

#Limpa a variável de seção. Mas no site que iniciou a seção as informações continuam.

session_destroy();

#destroy além de limpar a variável, destrói a variável e as informações somem do site.

# Para o array SESSION funcionar, o arquivo que o define tem que ser chamado antes.
# Neste exemplo nome só será chamado se Exemplo01.php for carregado primeiro.
# Para que neste caso, crie-se a seção.
