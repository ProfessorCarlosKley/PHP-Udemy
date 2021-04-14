<?php
class Pessoa
{
    public $nome = "Rasmus Lerdof"; //Publico
    protected $idade = 44; //Protegido
    private $senha = "123456"; //Privado não enxergado por Programador();

    public function verDados()
    {

        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>"; //Acesso ao protected;
        echo "Senha: " . $this->senha . "<br>"; //Acesso ao private;
    } //Fim da função.*/
} //Fim da classe.

class Programador extends Pessoa
{
    //Um programador é uma pessoa. Ou seja, herda da classe Pessoa;
    //Repetindo função da classe mãe.
    public function verDados()
    {
        echo "ESSE MÉTODO PERTENCE À CLASSE: " . get_class($this) . "<br>";
        //$this refere-se à própria classe. e get_classe obtém a classe do método.

        echo "Nome: " . $this->nome . "<br>"; //Acesso ao públic
        echo "Idade: " . $this->idade . "<br>"; //Acesso ao protected; Ok
        echo "Senha: " . $this->senha . "<br>";
        //ERRO! Acesso negado. Dará erro. Undefined; senha é private e não é lido por classes filhas.
    } //Fim da função.

}

$linha = str_repeat("=", 150);
echo $linha;
echo "<br>";
echo "Trabalhando com a classe extendida Programador()";
echo "<br>";
echo $linha;
echo "<br>";

$objeto2 = new Programador();
echo "Acessando a função verDados() agora definida na filha Programador(). Apesar de ainda exitir em Pessoa() a que se chama aqui é a de Programador()<br>";
echo "---------------------------------------. <br>";
$objeto2->verDados(); //Considera agora verDados de Programador(); 
echo "<br>";
echo "O atributo protegido (senha) só permite leitura na classe mãe. Portanto, como escrevemos verDAdos() na classe filha Programador() esse atributo não será reconhecido nela uma vez que é protegido. Será gerado erro.";
echo "<br>";
echo "---------------------------------------. <br>";
