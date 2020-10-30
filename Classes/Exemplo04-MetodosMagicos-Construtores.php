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
      echo ("Objeto Destruido");
  }

  public function getLogradouro()
  {
      return "Endereco: " . $this->logradouro;
  }

}//Fim da Classe
$newendereco = new Endereco("Rua José Pedro de Carvalho", "325", "Salvador-BA");
var_dump ($newendereco);
echo "<br>";
echo "<br>";
print_r ($newendereco);
echo "<br>";
echo $newendereco->getLogradouro();
echo "<br>";
unset($newendereco);//Destruindo objeto.
echo "<br>";
echo "<br>";
echo "Erro abaixo acontece deivido a chamada de um método do objeto já destruído.";
echo "<br>";
echo "<br>";
echo $newendereco->getLogradouro();
