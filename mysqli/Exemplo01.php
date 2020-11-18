<?php
$conn = new mysqli("localhost", "root", "", "udemydbphp7");

//Verificando se há erro na conexão através do método connect_error da classe mysali.
if ($conn -> connect_error){
    echo "Error: " . $conn -> connect_error;
    //Se acontecer algum erro, imprime mensagem de erro.
}

//O método prepare de mysqli, prepara comandos para serem enviados ao banco de dados.
//A interrogação será trocada pelos verdadeiros valores, definidos nos parâmetros.
$stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

/* Definindo os parâmetros para serem inseridos. Primeiro informamos o tipo deopis os valores. ss, os dois valores que serão acrescentados são string. Para cada campo uma letra corresopndente ao tipo. 
  * s = string; i = inteiro; d = float/double; blob = b.
  * stmt recebeu um método de preparação de $conn.
    por isso podemos acessar outro método de mysqli através dele.
    
    - bind_param deve receber valores por referências.
    neste caso precisamos passar as variáveis.*/

$stmt -> bind_param("ss",$login, $pass);
$login = "convidado";
$pass = "12345";

/*Executando o que foi preparado. Por isso as variáveis foram definidas depois, não tem problema, Tudo só será enviado quando dermos o execute. Por tanto já teremos definido as variáveis login e pass mesmo que depois de chamarmos com bind_param.*/

$stmt -> execute();

$login = "user";
$senha = "1234";

$stmt -> execute();



/** **************************************************************************************
 * - mysqli classe nativa do php, ela difere das demais, inicia com minúscula.
 * - se estivesse na núvem, receberia o ip do servidor no lugar do localhost.
 * - 1) IP servodpr. 2) usuário, 3) senha, 4) banco de dados.
 * - Banco criado com MySql WorkBench. (Poderia ser no phpMyAdmin do xampp).
 *  **************************************************************************************/

?>