<?php
class Pessoa{

    //Classes devem ter primeiras letras maíusculas.
    //atributos seguem mesma regra de variáveks primeira minúsuculas.

    public $nome; //Atributo.

    public function falar(){//Método
        
        return "Meu nome é " . $this -> nome;
        //$this refere-se à própria classe. Uma variável interna.  
        //Nada mais é que a representação da classe já instanciada.
        //Explicação boa no livro JavaScript & JQuery de Jon Duckett.
        //$this já faz papel do $ em -> nome; por isso não precisa.

    }
}

$carlos = new Pessoa();
//Esses parênteses apesar de não ter na criação da class pode ser usado.
//Com eles apesar de não ter um constructor neste caso, ele cria um vazio.
//Neste exemplo esses parênteses é opcional já que não tem umconstrutor.
//Porém é uma boa prática deixar.
$carlos -> nome = "CARLOS KLEI CARVALHO DE MOURA";
//O objeto consegue acessar o atributo nome porque ele é público.
echo $carlos -> falar(); //chama método.
?>

