<?php 
//USANDO PDO COM DAO (Data Object Access)
//Classes para conversar com Banco
//Essa é a classe genérica com um exemplo de select no final.
//As demais ações esrão herdadas destas na classe usuario.php.

class Sql extends PDO{
	//Sql nome escolhido opcionalmente.
	//Sql estende de PDO.
	private $conn; 
	//atributo para conexão com o banco. Recebe string de conexão PDO.

	public function __construct(){
	//Método constutor para conexão automática ao banco.
	
	$this -> conn = new PDO("mysql:host=localhost;dbname=udemydbphp7", "root", "");
} //Fim do Construtor.

//------------------------------------------------------------

	//Prepara um parâmetro apenas recebido pelo foreach da função abaixo.
	private function setParam($statement, $key, $value){
		$statement->bindParam($key, $value);
		//bindParam = bind = ligar, ligando (definindo) os parâmetros.
		//bind precisa receber uma chave e um valor, ver ex. 03 de PDO.
		//statment recebe o comando preparado na query stmt.
		//Nesse método recebemos um parâmetro conforme for de setParams.
		//Cada loop de setParams chama essa função com cahve e valor específico de cada linha para ser configurado aqui.
	}//fim de setParam

//------------------------------------------------------------

//ADICIONANDO PARÂMETRS NA Query -----------------------------
	private function setParams($statement, $parameters = array()){
		foreach ($parameters as $key => $value) {
		$this -> setParam($statement, $key, $value);
		//Chama setParam ao receber um array, que prepararrá o bind.
		//statment recebe o comando preparado na query stmt.
		//Para cada linha do array, chama setParam com a chave e o valor específico da linha atual. 
		//E, por sua vez, setParam Cria os binds para cada parâmetro (linha).
		//Nesse método podemos receber vários parâmetros.
		}
	}//Fim de setParams

//------------------------------------------------------------
//CLASSE PARA CONSULTA ---------------------------------------

	/*	
		- Query bruta, ou genérica. Será tratada deopis conforme a instrução que desejamos no banco. 
	 	- rowqurey será o comando sql pretendido: (DELETE, SELECT, INSERT...)
	 	- Parâmetros de array, ver exemplo 06 e 07 da pasta 14-PDO.
	 	- conn não precisa ser indicada com $. É um atributo da classe.
		  Ver nas aulas de objetos.
	 	*/


	public function query($rowQuery, $params = array()){
	
		$stmt = $this -> conn -> prepare($rowQuery);//Preparando o comando.
		//Chama setParams já com stmt preparado com a SQL, para adicionar os param.
  		$this -> setParams($stmt, $params);//Função definida acima.
	
		$stmt -> execute();
		//Até aqui basta a query, pois ela pode servir para um DELETE por exemplo e nã precisa retornar nada, por isso não usamos fatchAll e nem FETCH_ASSOC. Essas funções serão chamadas diretamente na instrução que se pretende, por exemplo, abaixo, SELECT retorna registros e por isso usamos o fetch.

		return $stmt;

	}
//------------------------------------------------------------

//CRIANDO A FUNÇÃO SELECT.------------------------------------
	public function select($rawQuery, $params = array()):array {
		//:array (tipo de retorno), indica que o método retorna um array.
		$stmt = $this -> query($rawQuery, $params);
		return $stmt -> fetchAll(PDO::FETCH_ASSOC);
		//fatchAll Exemplo01 da pasta PDO.
		//FETCH_ASSOC, para obter só os dados associatvos, sem as chaves.

	}//Fim de SELECT.
//------------------------------------------------------------
}//Fim da Classe Sql.

?>