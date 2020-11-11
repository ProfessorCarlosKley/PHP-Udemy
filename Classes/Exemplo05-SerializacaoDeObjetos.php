<?php
class Endereco{
  private $logradouro;
  private $numero;
  private $cidade;
  
  /*Métodos construtor. quando o objeto é criado. No PHP7 o padrão de usar o memso nome da classe (como em muitas linguagens de programação), está em desuso. Agora utilizamos __construct()*/
  public function __construct($a, $b, $c){

    $this -> logradouro = $a;
    $this -> numero = $b;
    $this -> cidade = $c;

  }//Fim do Constructor
  //destruct() - quando o objeto é destruido.
  public function __destruct(){
      echo ("<br> Objeto Destruido");
  }
  /**************************************************************************************/
  # Método para serialização de objeto, transformando em string.
  # Permite darmos um echo diretamente no objeto, sem a necessidade de funções gets.
  # Ao chamarmos o objeto direatmente com echo, mesmo não tendo métodos de leitura,
  # cairemos nesse (como se fosse um padrão).
  /**************************************************************************************/
  public function __toString(){
      return $this -> logradouro . ", " . $this -> numero . " - " . $this -> cidade;
  }
  public function getLogradouro(){
      return "Endereco: " . $this->logradouro;
  }

}//Fim da Classe
$newendereco = new Endereco("Rua José Pedro de Carvalho", "325", "Salvador-BA");
echo $newendereco;
//O echo precisa de uma string, ele não consege mostrar objeto inteiro, sendo assim,
//__toString será chamado.
unset($newendereco);//Destruindo objeto.


