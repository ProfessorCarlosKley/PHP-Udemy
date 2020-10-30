<?php
class Carro
{
    //Classes devem ter primeiras letras maíusculas.
    //atributos seguem mesma regra de variáveks primeira minúsuculas.

    //Atributos.
    private $modelo;
    private $motor;
    private $ano;

    //Métodos Get (Obter) e Set (Escrever). 

    //Obter modelo:
    public function getModelo()
    {
        return "Modelo: " . $this->modelo;
        //$this refere-se à própria classe. Uma variável interna.  
        //Nada mais é que a representação da classe já instanciada.
        //Explicação boa no livro JavaScript & JQuery de Jon Duckett.
        //$this já faz papel do $ em -> nome; por isso não precisa.
    }
    //Escrever modelo:
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        /* $modelo é a var definida no parâmetro, que pode ter qualquer nome.
           Em c por exemplo é comum trabalharmos com o mesmo nome.
           $this -> modelo representa o atributo da classe. $modelo que recebe o argumento da função.*/
    }

    //Obter motor:
    public function getMotor(): float
    {
        return $this->motor;
        //Veja que aqui não retornamos uma string "Motor: ", pois senão dá erro no cast.
        //Pois, exigimos um retorno float.
    }

    //Escrever motor:
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    //Obter ano:
    public function getAno(): int
    { //forçando retorno da função para int. cast.
        return $this->ano;
        //Veja que aqui não retornamos uma string "Motor: ", pois senão dá erro no cast.
        //Pois, exigimos um retorno float.
    }

    //Escrever ano:
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    //Exibir:
    public function getExibir()
    {
        return array(
            "Modelo: " => $this->getModelo(),
            "Motor: " => $this->getMotor(),
            "Ano: " => $this->getAno()
            //No array usamos =>, na classe ->.
            /*O espaço depois do nome das chaves no array tem que ser considerado, faz parte do nome.*/
        );
    }
} //Fim da classe.

$gol = new Carro();
//$gol -> modelo = "Gol-GT";
//Linha superior: tentativa de acessar um atributo private diretamente, não funcional
//Deve se para privates acessar através de métodos.
$gol->setModelo('Gol-GT');
$gol->setMotor('1.6');
$gol->setAno('2020');

echo "Exibindo o getExibir que gera o array dos atributos: ";
echo "<br>";
print_r($gol->getExibir());
echo "<br>";
echo "<br>";
echo "Exibindo o getExibir com var_dump para ver também o tipo de dados: ";
echo "<br>";
var_dump($gol->getExibir());


echo "<br>";
echo "<br>";
echo "Exibindo cada get's individuais: ";
echo "<br>";
echo $gol->getModelo();
echo "<br>";
echo "Motor: ". $gol->getMotor();
echo "<br>";
echo "Ano: ". $gol->getAno();
echo "<br>";
echo "<br>";
echo "Exibindo cada get's individuais com o array getExibir: ";
echo "<br>";
print_r($gol->getExibir()["Modelo: "]);
echo "<br>";
echo "Motor: "; //getAno retorna um float por isso, a string Motor não está na função
print_r($gol->getExibir()["Motor: "]);
echo "<br>";
echo "Ano: "; //getAno retorna um int por isso, a string Ano não está na função
print_r($gol->getExibir()["Ano: "]);
//O espaço depois do nome das chaves no array tem que ser considerado, faz parte do nome.
