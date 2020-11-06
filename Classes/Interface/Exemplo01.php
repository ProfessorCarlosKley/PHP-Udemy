<?php

interface Veiculo{
    public function acelerar($velcodade);
    public function desacelerar($velocidade);
    public function trocarMarcha($marcha);
  }

  // A classe que implement Veiculo:
class Civic implements Veiculo{
    //Para implementar várias basta usar vígula: class Civic implements Veiculo, Outra...
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

$carro = new Civic();
echo $carro -> acelerar(100);
echo $carro -> desacelerar(20);
echo $carro -> trocarMarcha(5);






//INTERFACE:-------------------------------------------------------------------------------
/** - Interface serva para organizar o código.
 *  - Serve para programar um código que conversará com um outro a fim de definir padrões.
 *  - Uma inteface serve para implementarmos (usarmos) em nossas páginas. Muitas vzes, nem precisamos saber de fato o conteúdo estrutural da interface, mas do que ela pode nos oeferecer.
 *  - A interface na verdade é um protótipo que diz quais métodos que devem existir e quais tipos de declaração que devemos ter ao usarmos ela.
 *  - A inerface diz ao programador que atributos e métodos devem ser implementados no programa para que atingamos o objetivo daquielo qu eestamos desenvolvendo. Na verdade ela obriga a implementação dos atributos e métidos já declarados nela.
 * 
 * Em Resumo: A interface determina para a classe que a implementará, quais métodos e atributos que ela dever ter.*/
?>