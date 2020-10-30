<?php
class Pessoa
{
    public $nome = "Rasmus Lerdof"; //Publico
    protected $idade = 44; //Protegido
    private $senha = "123456"; //Privado

    public function verDados()
    {
        echo "ESSE MÉTODO PERTENCE À CLASSE: " . get_class($this) . "<br>";
        //$this refere-se à própria classe. e get_classe obtém a classe do método.

        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>"; //Acesso ao protected;
        echo "Senha: " . $this->senha . "<br>"; //Acesso ao private;
    } //Fim da função.
} //Fim da classe.

$objeto = new Pessoa();
echo "Criador PHP: " . $objeto->nome . "<br>";

echo "<br>";
echo "O método resolve problema de leitura de protected e private.";
echo "<br>";
$objeto->verDados();
//verDados método público, pode ser chamado fora da classe.
echo "<br>";
