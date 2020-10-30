<?php
/*Abstração: Não é o mesmo que classe abstrata: Conceito que diz o quanto somos capazes de tornar genérico uma classe ao ponto de poder ser usada em vários lugares.*/
class Documento
{

    private $numero;

    public function getNumero()
    { //Chamado pelo filho.
        return $this->numero;
    } //Fim de get

    public function setNumero($numero)
    { //Chbamado pelo filho
        $this->numero = $numero;
        //$this -> numero, refere-se à private e $numero ao parâmetro,
        //quu einclusive poderia ser outra variável.
    } //Fim de set

} //Fim da classe mãe, Documentos.

class CPF extends Documento
{
    //extends (Herança) a classe CPF é filha de Documento.
    //Na Herança, apenas o filho acessa do pai.

    public function validar(): bool
    {

        echo "ESSE MÉTODO PERTENCE À CLASSE: " . get_class($this) . "<br>";

        $numeroCPF = $this->getNumero(); //Obtendo on úmero através da método do pai.
        echo "$numeroCPF";

        return true;
        //$this refere-se à própria classe. e get_classe obtém a classe do método.
        /*Podemos usar a função validar, já utilizada em exemplos anerioes, mas aqui como é só um exemplo colocamos retornar true.*/
    }
} //Fi de CPF;

$linha = str_repeat("=", 150);
echo $linha;
echo "<br>";
echo "HERANÇA";
echo "<br>";
echo $linha;
echo "<br>";

$doc = new CPF();
$doc->setNumero("880.664.365.-72");
echo "<br>Validação do CPF: " . $doc->validar();
