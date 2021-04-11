<?php
require_once("Config.php");
echo "ID do usuário: "; 
echo session_id();//Retorna o id da seção aberta pelo servidor... 
#Antes é necessário inicializar a seção chamando Exemlplo01.php.

/*
	- Um Id de seção é uma identificação única no servidor: ao acessar um site por exemplo o usuário ganha um id do servidor para identificá-lo.

	- O próprio servidor quem determina o ID. É muito usado por exemplo para identificar um carrinho de compra.

	- O id é um valor único entre o usuário (navegador) e o servidor.

	- Se executarmos uma janela anônima (sem registro no chrome) e executarmos este exemplo, será gerado outro ID.

	- Pode variar na mesma máquina ao ser acessado com navegadores diferentes ou uma guia sem registro (anônima).

	*/