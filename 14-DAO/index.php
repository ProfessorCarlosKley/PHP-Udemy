<?php 

require_once("config.php");

//sql() referencia o arquivo (classe) sql.php. Encontrada automaticamente através do autoload em config.php.

echo "EFETUANDO CONSULTA COM A CLASSE Sql.php <br><br>";
$sql = new Sql();

// select é um método da classe Sql.php. Definida no final do arquivo.

$usuarios = $sql -> select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

/* Lembrando que o método select da classe Sql já retorna fetchAll(PDO::FETCH_ASSOC); por isso, podemos utilizar echo json_encode.*/
//-----------------------------------------------------------------------------
echo "<br>";
echo str_repeat("-", 250);
echo "<br><br> USANDO A CLASS Usuario.php - CONSULTANDO ID<br><br>";
$root = new Usuario();
$root -> loadById(3); //Selecionndo usuário com ID = 1.
echo $root; //podemos dar um echo por conta do método toString em Usuario.
//-----------------------------------------------------------------------------
echo "<br>";
echo str_repeat("-", 250);
echo "<br><br> USANDO A CLASS ESTÁTICA Usuario.php - getlist para retornar todos os usuários.<br><br>";
$lista = Usuario::getlist();
//:: acessa método estático. Não precisa ser instanciado. Chamamos de forma direta.
echo json_encode($lista);
//-----------------------------------------------------------------------------
echo "<br>";
echo str_repeat("-", 250);
echo "<br><br> USANDO O MÉTODO ESTÁTICO search de Usuario.php - Select com LIKE.<br><br>";
//Carrega uma lista pelo login.
$busca = Usuario::search("car");
//Like de search acha qualquer nome que tenha a string car.
echo json_encode($busca);
echo "<br>";
echo str_repeat("-", 250);
//-----------------------------------------------------------------------------
echo "<br><br> USANDO O MÉTODO login para autenticação do Usuario.php<br><br>";
$usr = new Usuario();
$usr -> login("root", "root589589");
echo $usr;
//-----------------------------------------------------------------------------
echo "<br>";
echo str_repeat("-", 250);
echo "<br><br> NOVO USUÁRIO COM A CLASSE insert de Usuario.php<br><br>";

echo str_repeat("-", 250);
/*MÉTODO INSERIR, Comentado para não encher o banco ***********************
$inserir = new Usuario("php7", "%$!@#");
//$inserir -> setDeslogin("php");
//$inserir -> setDessenha("7000");
//set's agora alimentados pelo constructor

$inserir -> insert();

//Após inserir chama o último ID e lista. Conform linha 124 da classe usuario.php
//$this -> setData($results[0]);
//setData um método para listagem do array retornado. Retorno [0] sem laço pois só temos um retorno de registro.
echo $inserir;
****************************************************************************/
echo "<br><br> ATUALIZANDO USUÁRIO COM A CLASSE update de Usuario.php<br><br>";

$atualizar = new Usuario();

$atualizar -> loadById(3);

$atualizar -> update("Carlos Kley", "Fera");

echo $atualizar;
//-----------------------------------------------------------------------------
echo "<br>";
echo str_repeat("-", 250);

echo "<br><br> APAGANDO USUÁRIO COM A CLASSE delete de Usuario.php<br><br>";

$deletar = new Usuario();

$deletar -> loadById(9);//Localiza e armazena o id atravez da função loadById;

$deletar -> delete();

echo $deletar;

?>