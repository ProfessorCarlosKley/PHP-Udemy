<?php 
/* - Gerando um erro Notice:
   - Essa chamada de $_GET gerarrá um erro tipo Notice. Gera:

   	Notice: Undefined index: nome in C:\xampp\htdocs\Udemy\Excecoes_Erros\Exemplo04_Erro_Notice.php on line 18

   - O atributo nome não foi definido para GET.
*/

//Tratando a notícia e impedindo retorno no browser, via código. Sem mexer no php.ini;
// O correto é ter essa cnfiguração no arquivo config.php.

error_reporting(E_ALL & ~E_NOTICE);
//~ não exibe as noticias. Padrão do php.ini;
//Estamos permitindo a exibição dos erros, E_ALL, menos as notícias ~E_NOTICE.
//Após esse tratamento, a notícia mostrada acima, não aparecerá no navegador.

$nome = $_GET["nome"];
echo $nome;

 ?>