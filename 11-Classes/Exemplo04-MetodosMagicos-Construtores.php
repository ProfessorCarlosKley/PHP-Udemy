<?php
class Endereco
{
  private $logradouro;
  private $numero;
  private $cidade;

  /*
  
  - Método construtor (Métodos Mágicos). Quando o objeto é criado instanciado. No PHP7, o padrão de usar o memso nome da classe (como em muitas linguagens de programação), está em desuso. Agora utilizamos __construct().

  - toda vez que vermos num arquivo __<<nome>> pode-se tratar de um método mágico.

  - Na documentação do php os construtores são realmente chamados de Magic Method.

  - Todos os mlétodos mágicos começará com dois underline precedendo o nome.

  */
  public function __construct($a, $b, $c) {
    //Construtor: quando objeto é construído.
    $this->logradouro = $a;
    $this->numero = $b;
    $this->cidade = $c;
  /*
  - Através de construtores, podemos evitar a criação de muitos sets e gets.
  - Ao chamarmos um construtor já podemos iniciar os atributos da classe.
  */
  } //Fim do Constructor

  
  public function __destruct() {
    echo ("Objeto Destruido - Mensagem oriunda de __destruct ao usarmos unset no objeto.");
    /*
     - destruct() - quando o objeto é destruido.
     - quando desejamos matar algumas variáveis.
     - ou, encerrar o acesso a um banco de dados por exemplo.*/
  }

  public function getLogradouro() {
    return "Endereco: " . $this->logradouro .
           "<br> Número: " . $this->numero .
           "<br> Cidade: " . $this->cidade; 
  }
} //Fim da Classe

//Usando a classe e inicializando as informações.
$newendereco = new Endereco("Rua José Pedro de Carvalho", "325", "Salvador-BA");
echo "<b>Exibindo a classe com var_dump</b>";
echo "<br>";
echo "<br>";
var_dump($newendereco);
echo "<br>";
echo "<br>";
echo "<b>Exibindo a classe com print_r</b>";
echo "<br>";
echo "<br>";
print_r($newendereco);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<b>Obtendo dados dos atributos com getLogradouro</b>";
echo "<br>";
echo "<br>";
echo $newendereco->getLogradouro();
echo "<br>";
echo "<br>";
echo "<br>";

unset($newendereco);
//Destruindo objeto da memória. Unset, o cotrário do set (definir).

echo "<br>";
echo "<br>";
echo "Erro abaixo acontece deivido a chamada de um método do objeto já destruído.";
echo "<br>";
echo "<br>";
echo $newendereco->getLogradouro();
