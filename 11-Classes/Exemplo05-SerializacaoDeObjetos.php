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
  public function __construct($a, $b, $c)
  {

    $this->logradouro = $a;
    $this->numero = $b;
    $this->cidade = $c;
  } //Fim do Constructor
  //destruct() - quando o objeto é destruido.
  public function __destruct()
  {
    echo ("<br> Objeto Destruido. Mensagem diretamente do __destruct.");
  }
  /***********************************************************************
  - Método para serialização de objeto, transforma obj em string.
  - Permite darmos um echo diretamente no objeto, sem a necessidade de gets.
  - Ao chamarmos o objeto direatmente com echo, mesmo não tendo métodos para leitura, cairemos nesse (como se fosse um padrão).
   *************************************************************************/
  public function __toString()
  {
    return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
  }

  public function getLogradouro()
  {
    return "Endereco: " . $this->logradouro;
  }
} //Fim da Classe
$newendereco = new Endereco("Rua José Pedro de Carvalho", "325", "Araci-BA");
echo $newendereco;
//O echo precisa de uma string, ele não consege mostrar objetos, assim, ao ser chamado com parâmetro objeto, a classe direciona-o para a seção mágica  __toString que tomará as providências. Neste exemplo, 
unset($newendereco);//Destruindo objeto, retornar os atributos.
