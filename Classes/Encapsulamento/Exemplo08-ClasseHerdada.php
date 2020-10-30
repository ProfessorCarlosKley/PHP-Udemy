<?php
class Pessoa
{
    public $nome = "Rasmus Lerdof"; //Publico
    protected $idade = 44; //Protegido
    private $senha = "123456"; //Privado não enxergado por Programador();

    public function verDados()
    {
        echo "ESSE MÉTODO PERTENCE À CLASSE: " . get_class($this) . "<br>";
        //$this refere-se à própria classe. e get_classe obtém a classe do método.

        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>"; //Acesso ao protected;
        echo "Senha: " . $this->senha . "<br>"; //Acesso ao private;
    } //Fim da função.
} //Fim da classe.

class Programador extends Pessoa{
    //Um programador é uma pessoa. Ou seja, herda da classe Pessoa;
}

$linha = str_repeat("=", 150);
#------------------------------------------------------------------------------------------
echo $linha;
echo "<br>";
echo "Trabalhando com a classe Pessoa()";
echo "<br>";
echo $linha;
echo "<br>";

$objeto = new Pessoa();
echo "Criador PHP: " . $objeto->nome . "<br>";
echo "<br>";
echo "O método resolve problema de leitura de protected e private.";
echo "<br>";
$objeto->verDados();
//verDados método público, pode ser chamado fora da classe.
echo "<br>";
#------------------------------------------------------------------------------------------
echo $linha;
echo "<br>";
echo "Trabalhando com a classe extendida Programador()";
echo "<br>";
echo $linha;
echo "<br>";

$objeto2 = new Programador();
echo "Acessando método público de Pessoa(), função verDados(), através da classe filha Programador(): <br>";
echo "---------------------------------------. <br>";
$objeto2->verDados();
echo "<br>";
echo "O atributo protegido (senha) é lido pela função verDados() na própria classe, por isso conseguimos chamar na classe filha, mas aqui diretamente não conseguiremos. <br>";
echo "---------------------------------------. <br>";
echo "<br>";
echo "Acessando atributo público de Pessoa(), nome, através da classe filha Programador(): <br>";

echo "---------------------------------------. <br>";
echo "Criador PHP: " . $objeto2->nome . "<br>";
echo "---------------------------------------. <br>";
