<?php
interface Veiculo{
    public function acelerar($velcodade);
    public function desacelerar($velocidade);
    public function trocarMarcha($marcha);
  }
  
abstract class Automovel2 implements Veiculo{
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

/**
 * - O nome do arquivo deve ter o mesmo nome da classe. Isso para a função procurar o nome do arquivo através do nome da classe.
 * - Essa classe extende da classe automovel, portanto teremos ela num arquivo físico também com o mesmo nome.
 */
