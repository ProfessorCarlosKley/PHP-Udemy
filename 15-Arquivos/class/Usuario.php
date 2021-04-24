getDtcadastro<?php 

Class Usuario{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this -> idusuario;
	}

	public function setIdusuario($value){
		$this -> idusuario = $value;
	}

	public function getDeslogin(){
		return $this -> deslogin;
	}

	public function setDeslogin($value){
		$this -> deslogin = $value;
	}

	public function getDessenha(){
		return $this -> dessenha;
	}

	public function setDessenha($value){
		$this -> dessenha = $value;
	}

	public function getDtcadastro(){
		return $this -> dtcadastro;
	}
	public function setDtcadastro($value){
		$this -> dtcadastro = $value;
	}

	public function __construct($login = "", $password = ""){
		//Se a classe for iniciada sem parâmetros preenche com vazio.
		$this -> setDeslogin($login);
		$this -> setDessenha($password);
	}

	//Selecionando pelo ID. -------------------------------------------------
	public function loadById($id){//Carregar pelo ID.
		$sql = new Sql();//Instancia a classe Sql na var sql.
		//select definida na classe Sql.
		//Mes reotornando 1 registro apenas (pelo id) select vai retornar um array de array pois select poderia ter  retornando mais de uma linha.
		$results = $sql -> select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id)); 
			//select recebendo $rawQuery (instrução select) e $params (array de parâmetros, exigido por select na classe Sql.php).

		//Verificando se SELECT retornou algo. Lembrando que o retorno é um Array.
		if(isset($results[0])){
			//poderia verificar assim: if(count($results)>0);
			//Este select só retorna 1 elemento do array [0] por causa do id que é único.

		$this -> setData($results[0]);
		//setData definida abaixo. Escrevendo nos atributos.
		//Poderia ser definido tudo aqui, mas afim da organização ciramos setData.
			
		}
	}//Fim da consulta pelo Id. -------------------------------------------------

	//Método estático para consulta ---------------------------------------------
	public static function getlist(){//Traz todos os usuários do banco.
	/*
		- método estático pode ser usado sem instanciar (vantagem).
		- É importante que os métodos estáticos não fiquem amarrados na classe.
		- Por exemplo, usar $this para setar um atributo da classe ou get e set.
		- Como boas práticas, é bom que estáticos sejam livres de amarrações.
	*/
		$sql = new Sql();
		return $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
	}
    //Fim do método estático ---------------------------------------------------

    //Método serch para consulta ---------------------------------------------
	public static function search($login){
		$sql = new Sql();
		return $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(':SEARCH'=> "%".$login."%"));
	}
	//Fim do método search ---------------------------------------------------

	//Método serch para consulta ---------------------------------------------
	public function login($login, $password){//Autenticando Login

		$sql = new Sql();

		$results = $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(":LOGIN"=>$login,
		":PASSWORD" => $password
	));

	//Verificando se SELECT retornou algo. Lembrando que o retorno é um Array.
		if(isset($results[0])){
			//poderia verificar assim:
			//if(count($results)>0)
		$this -> setData($results[0]);
		} else {
			throw new Exception("Login e/ou senha inválido.");
		}

	}
	//Fim de login -----------------------------------------------------------
	
	//Programando insert.-----------------------------------------------------

	public function insert(){
		$sql = new Sql();
		//Buscando ID para 
		$results = $sql -> select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",
		//CALL para criar procedures no MySQL.
		//Os parâmetros são passados para a função no banco que recebe esses parâmetros.
		//No SqlServer no lulgar de CALL usaríamos EXECUTE.
		//sp_usuarios_insert foi criado no banco de dados, através do MySql WorkBench, não vi no phpAdmin a opção, a não ser por código.

			array(':LOGIN' => $this -> getDeslogin(), 
				  ':PASSWORD' => $this -> getDessenha()
			));
			if (count($results)>0){
				$this -> setData($results[0]);
			}
		}
		/*
		Criando sp_usuarios_insert (procedure) no banco (workbanch):
		Botão direito na tabela -> Create Stored Procedure.

		CREATE PROCEDURE `sp_usuarios_insert` (
		pdeslogin VARCHAR(64),
		pdessenha VARCHAR(256)
		)
		
		//Esses atributos pdeslogin e pdessenha são inseridos na chamada da função em select da classe Sql acima.

		BEGIN
		INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (pdeslogin, pdessenha);
    	SELECT * FROM tb_usuarios WHERE idusuario = last_insert_id();
		END

		Esse procedimento retorna o id do último registro inserido
		*/
	//Fim de Insert. ----------------------------------------------------------
//Função Update. ----------------------------------------------------------
	public function update($login, $password){
		$this -> setDeslogin($login);
		$this -> setDessenha($password);
		//Define os atributos que depois será recuperado para update com get.

		$sql = new Sql();

		$sql -> query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",
			array(':LOGIN' => $this -> getDeslogin(),
				  ':PASSWORD' => $this -> getDessenha(),
				  ':ID' => $this -> getIdusuario()
			));
	}
//Fim update. ----------------------------------------------------------

//Função delete. ----------------------------------------------------------

	public function delete(){
		$sql = new Sql;
		$sql -> query("DELETE FROM tb_usuarios WHERE idusuario = :ID", 
			array(
				':ID' => $this -> getIdusuario()
			));
		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(New DateTime());

	}
//Fim delete. ----------------------------------------------------------

	//Escrevendo nos atributos -----------------------------------------------	
	public function setData($data){
			//setData recebe um array de select acima, por exemplo.
			$this -> setIdusuario($data['idusuario']);
			$this -> setDeslogin($data['deslogin']);
			$this -> setDessenha($data['dessenha']);
			$this -> setDtcadastro(new DateTime($data['dtcadastro']));
			//DateTime para por no padrão que utilizamos.
		}
	//Fim da escrita dos atrtibutos.----------------------------------------

	//Lendo os atributos. --------------------------------------------------
	
	//Método mágico __toString() será chamado caso tentemos ler a classe Usuarios com echo. Ver definição em Exemplo05 da pasta 11-Classes.

	public function __toString(){
		return json_encode(array(
			"ID:" => $this -> getIdusuario(),
			"Login:" => $this -> getDeslogin(),
			"Senha:" => $this -> getDessenha(),
			"Data do Cadastro:" => $this -> getDtcadastro() -> format("d/m/Y H:i:s")
		));
			} //Fim de leitura dos atributos.-------------------------------

/***********************************************************************
  __toString: Exemplo, Exemplo05-SerializacaoDeObjetos.php da pasta Classes.
  - Método para serialização de objeto, transformando em string.
  - Permite darmos um echo diretamente no objeto, sem a necessidade de gets.
  - Ao chamarmos o objeto direatmente com echo, mesmo não tendo métodos para leitura, cairemos nesse (como se fosse um padrão).
*************************************************************************/
	} //FIM DA CLASSE

 ?>
 