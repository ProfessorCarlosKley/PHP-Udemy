.<?php
class Pessoa{
    public $nome = "Rasmus Lerdof"; //Publico
    protected $idade = 44; //protegidos
    private $senha = "123456"; //Privado

    public function verDados(){

        echo $this -> nome ."<br>";
        echo $this -> idade ."<br>";
        echo $this -> senha ."<br>";
    }//Fim da função.
} //Fim da classe.

$objeto = new Pessoa();
//Método público, permite ser acessado de fora da classe.
echo "Criador PHP: " . $objeto -> nome ."<br>";
echo "Idade: " . $objeto -> idade ."<br>"; //dará erro, atributo protegido.
echo "Senha: " . $objeto -> senha ."<br>"; //dará erro, atributo private. e 
/*  
    - Dará erro. Nas linhas  Não podemos acessar atributos protegidos de fora da classe.
    - Este, deve ser acessado através de um método dentro da classe.
    - protected serão acessados por métodos da própria classe ou de uma outra classe que HERDA (classe filha). Objetos não acessam diretamente protected e private.
    - private só e acessado pela própria classe - nivel maior de proteção.
    - O private é mais protejido (maior proteção) que o protected.
    - Classes filhas não acessam private.*/
    
