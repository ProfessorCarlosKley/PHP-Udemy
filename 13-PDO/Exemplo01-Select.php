<?php
$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");
/** 
    - Instanciando a classe PDO (php data objetc), para trabalhar com banco de dados, php7. Essa classe, torna mais prático o acesso ao banco.
    1) tipo de banco, aqui mysql, seguido de dois pontos e onome do banco.
    2) Na sequência o ip ond ese encontra o banco.
    3) Depois, usuário e senha.
*/

//Preparando o comando. prepare, método da classe PDO.:
$cmd = $conn -> prepare ("SELECT * FROM tb_usuarios ORDER BY idusuario");
//Executando o comando. execute, método da classe PDO:
$cmd -> execute();

$results = $cmd -> fetchAll(PDO::FETCH_ASSOC);
/*
    - fatchAll já fatia todas as linhas (registro por registro), diferente do misqli que tivemos que fazer um while passando linha por linha e jogando na variável row.* 
    - $results recebe um arrey dos registros encotrados no banco.
    - PDO::FETCH_ASSOC traz apenas as chaves do array, ignora os índices.
    - Cada registro retornado é um índice de um array, e as chaves são as colunas (campos) do registro.
*/

var_dump($results); //- Usado para ver a estrutura do array retornado.

echo "<br>";
echo "<br>";

for ($x = 0; $x < count($results); $x++) {
    echo "ID: ";
    print_r($results[$x]['idusuario'] . "<br>");
    echo "Login: ";
    print_r($results[$x]['deslogin'] . "<br>");
    echo "Senha: ";
    print_r($results[$x]['dessenha'] . "<br>");
    echo "Data de Criação : ";
    print_r($results[$x]['dtcadastro'] . "<br><br>");
}

echo "<br>";
echo "<br>";
echo "EXIBINDO VALORES DOS CAMPOS COM foreach<br>";
echo "<br>";

foreach($results as $row){//Percorre linha por linha.
/*
    - No primeiro foreach ele encontra uma linha, contendo campos.
    - results é um array de array. cada array de results é uma linha que contem os campos da tabela (outro array). Ou seja, results é o array mais externo que contém os arrays correspondente a cada linha que nada mais é que um array de campos.
    - foreach percorre o array results e para cada linha cria a variável $row que conterá o array dos campos.

*/
    foreach ($row as $key => $value){
    //Em cada linha, 2º loop, percorre coluna por coluna dentro da linha.
    //cada linha é um array de campos.
    //$key = colunas do array (chaves).
    //Ver exemplo07 da pasta Estrutura de controles para lembrar uso de key.

    echo "<strong>" . $key . "</strong>" . ": " . $value . "<br>";
      }
echo "============================================================= <br>";
}
?>
