<?php
class Pessoa{
    public $nome = "Rasmus Lerdof"; //Publico
    protected $idade = 44; //Protegido
    private $senha = "123456"; //Privado

    public function verDados(){

        echo $this -> nome ."<br>";
        echo $this -> idade ."<br>";
        echo $this -> senha ."<br>";
    }//Fim da função.
} //Fim da classe.

$objeto = new Pessoa();
echo "Criador PHP: " . $objeto -> nome ."<br>";
echo "Idade: " . $objeto -> idade ."<br>"; 
/*  - Dará erro. Não podemos acessar atributos protegidos
    - protected serão acessados por métodos da própria classe ou quem HERDA da classe.
    - Objetos não acessam diretamente protected e private.
    


echo "Senha: " . $objeto -> senha ."<br>"; //dará erro.
/*  - private só e acessado pela própria classe - nivel maior de proteção.
    - O private é mais protejido (maior proteção) que o protected.
    - classes quer herdam não acessam private.*/
    
