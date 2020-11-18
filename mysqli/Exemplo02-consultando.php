<?php
$conn = new mysqli("localhost", "root", "", "udemydbphp7");

//Verificando se há erro na conexão através do método connect_error da classe mysali.
if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
    //Se acontecer algum erro, imprime mensagem de erro.
}

//Executando uma consulta através do método query; 
//Query retorna o restultado da consulta no banco, daí armazenamos numa variável.
$result = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();
//variável para adicionar os dados de $row que futuramente pode ser transformado em json.

//Acessando dados da variável result;
echo "DADOS DO ARMAZENAMENTO DA VARIÁVEL row";
echo "<br><br>";
while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
    /*A linguagem mysql tem um cursor, este cursor pode ter ou não dados.
    fetch navega linha por linha com o cursor dentro do banco.
    Enquanto for verdadeiro, ou seja, existir dados na linha percorrida, 
    esses dados serão acrescentados em $row.
    
    fetch_array retorna um array vazio quando chegar no final do banco, Um array vazio no php equivale a false. Desse modo, o loop wihle encerra.
    
    - A constante MYSQLI_ASSOC do mysqli faz com que o array apresente apenas os nomes das colunas e não índices. 
    - poderia ser fatch_assoc() ao invés de utilizar a constante.*/
    
    //var_dump($row);
    array_push($data, $row);
    print_r($row);
}

echo "<br><br>";
echo "DADOS DO ARMAZENAMENTO DA VARIÁVEL data";
echo "<br><br>";
echo json_encode($data);


/** **************************************************************************************
 * - mysqli classe nativa do php, ela difere das demais, inicia com minúscula.
 * - se estivesse na núvem, receberia o ip do servidor no lugar do localhost.
 * - 1) IP servodpr. 2) usuário, 3) senha, 4) banco de dados.
 * - Banco criado com MySql WorkBench. (Poderia ser no phpMyAdmin do xampp).
 *  **************************************************************************************/
