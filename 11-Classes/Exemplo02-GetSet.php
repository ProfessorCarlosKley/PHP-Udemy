<?php
class Carro
{
    //Boas Práticas: Classes devem ter primeiras letras maíusculas.
    //atributos seguem mesma regra de variáveks primeira minúsuculas.

    /*
       - Atributos privados. É mais indicado para se trabalhar com classes
       - E para ler/escrever usamos métodos get e set.
       - A vantagem de se trabalhar com atributos manipulados por get e set é que podemos validar, tratar... além de ser mais seguro, termos mais contrtole.
    */

    private $modelo;
    private $motor;
    private $ano;

    //Métodos Get (Para Ler) e Set (Para Escrever). 

    //Obter modelo:
    public function getModelo() 
    //Por convenção métodos são nomeados com mesma regras dos atributos.
    //camelcase, primeira minúscula e demais maiúscula.
    {
        return "Modelo: " . $this->modelo;
       /* 
        - Atributo fora do método escreve normal, só dentro de um método usamos $this. Serve para referenciar atributos e métodos dentro de outros métodos. O Método falar e o atributo nome estão na mesma classe, e para esse método acessar um atributo de sua classe, usa $this.
        - $this refere-se à própria classe. Uma variável interna.  
        - Nada mais é que a representação da classe já instanciada.
        - Explicação boa no livro JavaScript & JQuery de Jon Duckett.
        - $this já faz papel do $ em -> nome; por isso não precisa.
        - -> acessa atributo da classe.
        - Ao utilizarmos $this não precisamos usar $ para erferenciar o atributo.
        */
    }//Fim de getModelo. ----------------------------------------------

    //Escrever modelo:
    public function setModelo($modelo){
    //$modelo é a var definida no parâmetro, que pode inclusive pode ter qualquer nome.
    
        $this->modelo = $modelo;
        //Em c por exemplo é comum trabalharmos com o mesmo nome.
        //Nesse contexto de escopo de variáveis, this acessa o atributo da classe e $modelo refere-se ao parâmetro de setModelo.
    }//Fim de setModelo. ----------------------------------------------

    //Obter motor:
    public function getMotor(): float
    {
        return $this->motor;
        //Veja que aqui não retornamos uma string "Motor: ", pois senão dá erro no cast.
        //Pois, exigimos um retorno float.
    }//Fim de getMotor. ----------------------------------------------

    //Escrever motor:
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }//Fim de setModelo. ----------------------------------------------

    //Obter ano:
    public function getAno(): int
    { //forçando retorno da função para int. cast.
        return $this->ano;
        //Veja que aqui não retornamos uma string "Motor: ", pois senão dá erro no cast.
        //Pois, exigimos um retorno float.
    }//Fim de getAno. ----------------------------------------------

    //Escrever ano:
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    //Método para exibir todas as informações do carro:
    public function getExibir()
    {
        return array(
            "Modelo: " => $this->getModelo(),
            "Motor: " => $this->getMotor(),
            "Ano: " => $this->getAno()
            /*- No array usamos =>, na classe ->.
              - O espaço depois do nome das chaves no array tem que ser considerado, neste caso, faz parte do nome da chave, <<espaço>> é um caracter.
              - Modelo , Motor e Ano , são as chaves do array.
            */
        );//Fim do array
    }//Fim de getExibir. ----------------------------------------------
} //Fim da classe.

$gol = new Carro();
//$gol -> modelo = "Gol-GT";

//Linha superior: tentativa de acessar um atributo private diretamente, não funciona.

//Deve se para privates acessar através de métodos.
$gol->setModelo('Gol-GT');
$gol->setMotor('1.6');
$gol->setAno('2020');

echo "<b>Exibindo informações do carro com getExibir que gera um array dos atributos: </b>";
echo "<br>";
print_r($gol->getExibir());
echo "<br>";
echo "<br>";
echo "<b>Exibindo o getExibir com var_dump para ver também o tipo de dados: </b>";
echo "<br>";
var_dump($gol->getExibir());


echo "<br>";
echo "<br>";
echo "<b>Exibindo cada get's individuais: </b>";
echo "<br>";
echo $gol->getModelo();
echo "<br>";
echo "Motor: ". $gol->getMotor();
echo "<br>";
echo "Ano: "  . $gol->getAno();
echo "<br>";
echo "<br>";
echo "<b>Exibindo cada get's individuais com o array getExibir: </b>";
echo "<br>";
print_r($gol->getExibir()["Modelo: "]);
//Atenção para o espaço no final da chave, faz parte de nome definido no array de getExibir.
echo "<br>";
echo "Motor: ";
//getAno retorna um float por isso, a string Motor não está na função
print_r($gol->getExibir()["Motor: "]);
echo "<br>";
echo "Ano: "; //getAno retorna um int por isso, a string Ano não está na função
print_r($gol->getExibir()["Ano: "]);
//O espaço depois do nome das chaves no array tem que ser considerado, faz parte do nome.
