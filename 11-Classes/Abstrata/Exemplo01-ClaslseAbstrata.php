<?php
#-----------------------------------------------------
//CLASSE ABSTRATA:
/**
    - Interface serva para organizar o código. 
    - A diferença de uma classe abstrata para uma classe comum, é que o objeto nunca vai instanciar uma classe abstrata.
    - Para usarmos a classe abstrata, temos que criar uma segunda classe que vai estender dessa classe.
    - Uma classe pode impelentar várias interfaces, mas, uma classe só pode herdar de uma abstrata.
    - Uma classe abstrata normalmente é mais genérica. Por exemplo, nesse código, temos uma clásse genérica chamada carro, mas que não sabemos qual carro será ainda. Portanto teremos classes específicas que serão extensões da classe pai, Automovel.
    - Na Classe Abstrata além de definirmos os métodos que ela terá (como na interface) mas também já definimos o que eles fazem.
 * */

#---------------------------------------------------------------------
interface Veiculo{
    public function acelerar($velocidade);
    public function desacelerar($velocidade);
    public function trocarMarcha($marcha);
  }

//A classe que implement Veiculo é uma abstrata e será extensão de DelRey:
abstract class Automovel implements Veiculo{
//Automovel implementa Veiculo, porém, não podemos instanciar Automovel diretamente. Ela é uma genérica e para instanciar precisamos chamar através de outra classe. Que será uma classe de um tipo específico de carro por exemplo.
    public function acelerar($speed){
        //Na definição da função, o parâmetro não necessita ter exatamente o mesmo nome.
        //Basta que tenho o mesmo número de parâmetros que a interfece quer e seu tipo.
        echo "O veículo foi acelerado até: ". $speed . " km/h.<br> ";
    } //Fim do método acelerar

    public function desacelerar($velocidade){
        echo "O veículo desacelerou até: ". $velocidade . " km/h.<br>";
    }//Fim do Freio

    public function trocarMarcha($marcha){

        echo "Marcha alterada para : ". $marcha . "ª marcha. <br>";

    }//Fim da troca de marcha

}
class DelRey extends Automovel{ //Instanciando carro e não Automóvel.

    public function empurrar(){
        //Método específico da classe DelRey
        echo "Del Rey está sendo empurrado. Não aguentou o tranco. <br>";
    }

}
//$carro - new Automovel();
//Dará erro. Fatal Error. PHP não permite instanciar abstratas.
$carro = new DelRey();
echo $carro -> acelerar(200); //De Automovel
echo $carro -> desacelerar(20);//De Automovel
echo $carro -> trocarMarcha(5);//De Automovel
echo $carro -> empurrar();//De DelRey
?>

