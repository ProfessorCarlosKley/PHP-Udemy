<?php
//Buscando classes em outras pastas
function incluirClasses($nomeClasse){
    if (file_exists($nomeClasse.".php")===true)
    {
        require_once($nomeClasse.".php");
    }
    //file_exists verificará se o arquivo da classe já existe no diretório atual.
    //Essa função retorna ture ou false.
    //Lembrando que $nomeClasse é obtida automaticamente quanodo php encontra uma referência de classe no código (abaixo).
}

/*  Incluindo as classes da pasta ClassesAbstratas.
    Duas formas de se fazer, incluindo uma função diretamente como parâmetro, ou usando função an^nima.*/ 


spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
    
/*Função anônima;
- sps_autoload encontra o nome da classe no código e utiliza como parâmetro da função.spl - resolve o problema de autoload que só procura na pasta atual, a não ser que ouviesse outros tramentos mais complexos para isso, spl_autoload torna mais prático.

- sps_autoload permite registrar mais de uma função como função de autoload.*/


    if (file_exists("ClassesAbstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php")===true){
    //DIRECTORY_SEPARATOR, obtem automaticamente a barra de separação de diretório de acordo com o sistema.
    require_once("ClassesAbstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php"  );
    }

});

        /**
         * Standard PHP Library ou SPL é uma coleção de classes e interfaces que servem para resolver problemas padrões no mundo PHP, seu principal objetivo é prover interfaces que permita os desenvolvedores fazer um uso completo das vantagens da programação orientado a objetos. ..
         */
$carro = new DelRey2();
/*o nome da classe DelRey, é passado automaticmente como parâmetro da função incluirClasses, função qu também é passada como parâmetro de spl_autoload_register.

-  Outra forma de chamar a função, com spl_autoload é através de uma função anônima.

*/
echo $carro -> acelerar(100);
echo $carro -> desacelerar(20);
echo $carro -> trocarMarcha(5);
echo $carro -> empurrar();
