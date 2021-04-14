<?php
class Pessoa{

    //Boas Práticas: Classes devem ter primeiras letras maíusculas.
    //atributos seguem mesma regra de variáveks primeira minúsuculas.

    public $nome; //Atributo, uma variável com mais recursos.

    public function falar(){//Método, uma função com mais recursos.
        
        return "Meu nome é " . $this -> nome;
        /* 
        - Atributo fora do método escreve normal, só dentro de um método usamos $this. Serve para referenciar atributos e métodos dentro de outros métodos. O Método falar e o atributo nome estão na mesma classe, e para esse método acessar um atributo de sua classe, usa $this.
        - $this refere-se à própria classe. Uma variável interna.  
        - Nada mais é que a representação da classe já instanciada.
        - Explicação boa no livro JavaScript & JQuery de Jon Duckett.
        - $this já faz papel do $ em -> nome; por isso não precisa.
        - -> acessa atributo da classe.
        - Ao utilizarmos $this não precisamos usar $ para erferenciar o atributo.
        */
    }
}

$carlos = new Pessoa();
/* - Parênteses indica um método construtor, neste caso vazio, se não for colocado não dará erro.
   - Esses parênteses apesar de não ter na criação da class pode ser usado.
   - Com eles apesar de não ter um constructor neste caso, ele cria um vazio.
   - Neste exemplo esses parênteses são opcionais já que não tem um construtor.
   - Porém é uma boa prática deixar.*/
$carlos -> nome = "CARLOS KLEI CARVALHO DE MOURA - Programador.";
/*
  - O objeto, aqui de fora, consegue acessar o atributo nome porque ele é público.
  - Um objeto acessa tudo que é público.
*/
echo $carlos -> falar(); //chama método.

//Usamos o echo porque na função apenas retornamos uma string, não imprimimos através da função. Se tivéssemos utilizado um ehco na função, não precisaríamos usar o echo aqui.
?>

