<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function desacelerar($break);
    public function trocarMarcha($marcha);
# A classe que implementa Veiculo tem por obrigação ter esses três métodos.

# Os métodos necessariamente precisam ter parâmetros, que não são obrigados a terem o mesmo nome, basa que sejam do mesmo tipo.

# Na definição da função, o parâmetro não necessita ter exatamente o mesmo nome. É exigido que tenham o mesmo número de parâmetros declarados na interface e que sejam do mesmo tipo.
}//Fim da Interface

class Civic implements Veiculo{
//Para implementar várias interfaces, basta usar vígula: class Civic implements Veiculo, Outra...
public function acelerar($speed){


        echo "O veículo foi acelerado até: ". $speed . " km/h.<br> ";
    } //Fim do método acelerar
public function desacelerar($freio){
        echo "O veículo desacelerou até: ". $freio . " km/h.<br>";
}//Fim do Freio
public function trocarMarcha($marcha){

        echo "Marcha alterada para : ". $marcha . "ª marcha. <br>";

    }//Fim da troca de marcha

}

$carro = new Civic();
echo $carro -> acelerar(100);
echo $carro -> desacelerar(20);
echo $carro -> trocarMarcha(5);


//INTERFACE:----------------------------------

/**
 - Interface serva para organizar o código. Funciona como um protótipo.
 - Serve para programar um código que conversará com um outro a fim de definir padrões.
 - Uma inteface serve para implementarmos (usarmos) em nossas páginas. Muitas vzes, nem precisamos saber de fato o conteúdo estrutural da interface, mas do que ela pode nos oeferecer.

 - A interface na verdade é um protótipo que diz quais métodos que devem existir e quais tipos de declaração que devemos ter ao usarmos ela.

 - A inerface diz ao programador que atributos e métodos devem ser implementados no programa para que atingamos o objetivo daquilo que eestamos desenvolvendo. 

 - A INTERFACE obriga a implementação dos atributos e métidos já declarados nela.

 * Em Resumo: A interface determina para a classe que a implementará, quais métodos e atributos que ela dever ter (exige a implentação) */
?>