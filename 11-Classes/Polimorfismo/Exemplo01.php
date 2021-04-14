<?php
/***********************************************************************
 * POLIMORFISMO: Capacidade de muitas formas.
  - Em síntese: Métodos com o mesmo nome em classes diferentes (classes herdadas) têm comportamentos diferentes. 
  - Na maioria das vezes, têm parâmetros diferentes.
  - Abstract é uma classe mais genérica, por exemplo, não sabemos ainda de que animal tratamos. Observações no arquivo Exemplo01 da pasta abstrata.
 **********************************************************************/
abstract class Animal{//Não permite instanciar uma animal genérico.
    public function somEmitido(){
        return "Som emitido pelos animais - ";
    }
    public function mover(){
        return "Corre Muito... ";
    }
}

class Cachorro extends Animal{
    public function somEmitido(){   
/*método polimórfico. Altera comportamento da classe pai e exibe mensagem abaixo para o método somEmitido()*/
    
        return "CACHORRO: late!<br>";//Sobrepõe mensagem da classe pai.
    }
}

class Gato extends Animal{
    public function somEmitido(){
/*método polimórfico. Altera comportamento da classe pai e exibe mensagem abaixo par ao método somEmitido()*/
        return "GATO: mia!<br>";//Sobrepõe mensagem da classe pai.
    }
}

class Galo extends Animal{
    public function somEmitido(){
    /*método polimórfico. Altera comportamento da classe pai e exibe mensagem abaixo par ao método somEmitido()*/    
        return "GALO: canta!<br>";//Sobrepõe mensagem da classe pai.
    }
}

class Leao extends Animal{
    public function somEmitido(){
        return "LEÃO: ruge!<br>"; //Sobrepõe mensagem da classe pai.
    }
    public function mover(){
        return "Esse animal é muito veloz: " . parent::mover();
/*  - Nesse caso, parent permite que acessemos o método mover da classe pai.
    - Usamos :: da mesma forma para acessar static.
    - parent (pai) se não usássemos a mensagem antes da concatenação era exibido apenas a mensagem definida em Animal (Pai) não permitiria o polimorfismo. No Polimorfismo o mátodo dentro da classe soprepõe ao método do Pai. é o que acontece com o método somEmitido 
    - parent aqui permite acessar o método da classe pai.*/
    }
}

class Lobo extends Animal{
    public function somEmitido(){
        return "LOBO: uiva!<br>";//Sobrepõe mensagem da classe pai.
    }
}
// Criando a lista de animais (objetos).
$cachorro = new Cachorro();
$gato = new Gato();
$galo = new Galo();
$leao = new Leao();
$lobo = new Lobo();
echo "<br>";

echo "SOM EMITIDO PELOS ANIMAIS: <br><br>";
//Array de objetos.
$animals = array($cachorro, $gato, $galo, $leao, $lobo);
foreach($animals as $animal) {
    /*Para cada objeto, cria uma variável do tipo objeto e acessa o método 
    makeSound() de cada um deles.
    - O método somEmitido através do polimorfismo, muda
    o comportamento do método definido na classe Animal. Por isso, a mensagem exibida aqui é o echo definido em cada classe filha. No caso do, "CACHORRO: late!<br>";
    - A mensagem "som emitido pelos animais" só seria exibido se o método fosse chamado por um objeto do tipo Animal, mas, para isso, a classe não poderia ser Abstract.*/
  echo $animal->somEmitido();
  
}
echo "<br>";
echo "O gato, ".$gato->mover() . "<br>";
echo "O cachorro, ".$cachorro->mover(). "<br>";
/*
- Nas duas linhas superiores, a mensagem exibida é a definida na classe pai.
- isso acontece porque não temos na classe gato e cachorro um método mover definido (polimórfico) para sobrescrever.
- Se tivesse teriamos que usar parent para considerar (não sobprepor).
*/
echo "O leão, ".$leao->mover(). "<br>";



?>
