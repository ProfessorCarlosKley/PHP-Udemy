<?php
/*Abstração: Não é o mesmo que classe abstrata: Conceito que diz o quanto somos capazes de tornar genérico uma classe ao ponto de poder ser usada em vários lugares.

A filosofia das classes reza que somente os filhos acessam dados da classe pai. O Contrário não é verdadeiro. Pais não acessam dados dos filhos.*/
class Documento
{

    private $numero;

    public function getNumero()
    { //Chamado pela classe filha.
        return $this->numero;
    } //Fim de get

    public function setNumero($numero)
    { //Chbamado pela classe filha
        $this->numero = $numero;
        //$this -> numero, refere-se à private e $numero ao parâmetro,
        //quu einclusive poderia ser outra variável.
    } //Fim de set

} //Fim da classe mãe, Documentos.

class CPF extends Documento
{
    //extends (Herança) a classe CPF é filha de Documento.
    //Na Herança, apenas o filho acessa do pai.

    public function validar(): bool //retorna um boleano.
    {

        echo "validar() Pertence à Classe: " . get_class($this) . "<br>";

        $numeroCPF = $this->getNumero();
        //Obtendo on úmero através da método do pai.
        echo "CPF: $numeroCPF";

        return true;
        //$this refere-se à própria classe. e get_classe obtém a classe do método.
        //Podemos usar a função validar, já utilizada em exemplos anterioes, mas aqui como é só um exemplo colocamos retornar true.
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
