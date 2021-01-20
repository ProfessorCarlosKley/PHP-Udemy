<?php
$conn = new PDO("mysql:dbname=udemydbphp7;host=localhost", "root", "");
/** PDO php data objetc, para trabalhar com banco de dados, php7 
 * .Torna mais prático o acesso ao banco.
 * 1) tipo de banco, aqui mysql, seguido de dois pontos e onome do banco.
 * 2) Na sequência o ip ond ese encontra o banco.
 * 3) Depois, usuário e senha.
*/

$stmt = $conn -> prepare ("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt -> execute();

$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
/**fatchAll já fatia todas as linhas, diferente do misqli que tivemos que fazer um while passando linha por linha e jogando na variável row. * 
 * PDO::FETCH_ASSOC traz apenas as chaves do array, ignora os índices.
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

foreach($results as $row){//Linha por linha.
/**resulte é um array de array. cada array de results é uma linha que contem os campos da tabela. (array também) 
 * ou seua, results é o array mais externo que contém os arrays correspondente a cada linha que nada mais é que um array de campos.
 * foreach percorre o array results e para cada linha cria a variável $row que conterá o array dos campos.
*/

    foreach ($row as $key => $value){//Coluna por coluna.
    //cada linha é um array de campos...
    //$key = colunas do array (chaves). ver exemplo07 da pasta Estrutura de controles.

    echo "<strong>" . $key . "</strong>" . ": " . $value . "<br>";
  
    }
echo "============================================================= <br>";
}
?>
