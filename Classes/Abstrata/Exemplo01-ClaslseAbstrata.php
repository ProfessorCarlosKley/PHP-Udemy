<?php
#-----------------------------------------------------------------------------------------
/**
 * 
*/
#-----------------------------------------------------------------------------------------
interface Veiculo{
    public function acelerar($velcodade);
    public function desacelerar($velocidade);
    public function trocarMarcha($marcha);
  }

  // A classe que implement Veiculo:
abstract class Automovel implements Veiculo{
    //Automovel implementa Veiculo, porém, não podemos instanciar Automovel diretamente. 
    //Ela é uma genérica e para instanciar precisamos chamar através de outra classe.
    //Que será uma classe de um tipo específico de carro por exemplo.
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

class DelRey extends Automovel{

    public function empurrar(){
        //Método específico da classe DelRey
        echo "Del Rey está sendo empurrado. Não aguentou aceleração. <br>";
    }

}
//$carro - new Automovel(); Dará erro. Fatal Error.
$carro = new DelRey();
echo $carro -> acelerar(100);
echo $carro -> desacelerar(20);
echo $carro -> trocarMarcha(5);
echo $carro -> empurrar();


//CLASSE ABSTRATA:------------------------------------------------------------------------
/** - Interface serva para organizar o código. 
 *  A diferença de uma abstrata para uma comum, é que o objeto nunca vai instanciar a classe abstrata.
 *  Para usarmos a classe abstrata, temos que criar uma segunda classe que vai estender dessa classe.
 * Uma classe impelenta várias interfaces, mas, uma classe só herda de uma abstrata.
 * Uma classe abstrata normalmente é mais genérica. Por exemplo, nesse código, temos uma clásse genérica que carro, mas que não sabemos qual carro ainda. Portanto teremos classes específicas que serão extensões da classe pai, Automovel.
 * */
?>

