<?php
//Buscando classes em outras pastas. Nete exemplo na pasta principal e  na pasta ClassesAbstratas.
function incluirClasses($nomeClasse){
    if (file_exists($nomeClasse.".php")===true){
        require_once($nomeClasse.".php");
    }
    /*
        - file_exists verificará se o arquivo da classe já existe no diretório atual.
        - Essa função retorna ture ou false.
        - Lembrando que $nomeClasse é obtida automaticamente quanodo php encontra uma referência de classe no código (abaixo) através dos autloads.
        - nomeClasse é alimentada com o retorno de spl_autoload_register, ou seja nome da classe instanciada. Nesta função procurará na MESMA PASTA.
        - spl_autoload encontra o nome da classe como no autload normal, Exemplo01  e utiliza como parâmetro da função.spl - resolve o problema de autoload que só procura na pasta atual, a não ser que ouviesse outros tratamentos mais complexos para isso, spl_autoload torna mais prático.
        - Standard PHP Library ou SPL é uma coleção de classes e interfaces que servem para resolver problemas padrões no mundo PHP, seu principal objetivo é prover interfaces que permita os desenvolvedores fazer um uso completo das vantagens da programação orientado a objetos.
    */
}

//- spl_autload permite regitrar mais de uma função como autoload.

spl_autoload_register("incluirClasses");
/*  
    - Incluindo agora, as classes da pasta ClassesAbstratas.
    Agora só para fins de estudo, vamos usar uma função anônima.
    */ 
spl_autoload_register(function($nomeClasse){//Função anônima

    if (file_exists("ClassesAbstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php")===true){
    //DIRECTORY_SEPARATOR, obtem automaticamente a barra de separação de diretório de acordo com o sistema.
    require_once("ClassesAbstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php"  );
    }

});

$carro = new DelRey2();
/*o nome da classe DelRey2, é passado automaticmente como parâmetro da função incluirClasses, função que também é passada como parâmetro de spl_autoload_register.

-  Outra forma de chamar a função, com spl_autoload é através de uma função anônima.

*/
echo $carro -> acelerar(100);
echo $carro -> desacelerar(20);
echo $carro -> trocarMarcha(5);
echo $carro -> empurrar();
