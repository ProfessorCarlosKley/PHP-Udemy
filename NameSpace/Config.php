<?php
# Para spl_autoload_register, ver comentários no arquivo Exemplo02.php do diretório:
# Classes/Autoload

//Usando função anônima para gerar registros autoload's:
spl_autoload_register(function($nameClass){
    //Diretório de procura das classes. Na estrutura terá o nome class.
    //$nameClass recebe nome da classe encontrada neste arquivo através de spl_autoload.

    /*Depois de criado namespace na classe Cadastro da pasta Cliente, autolad irá receber como marâmetro $nameClass o nome do namespace uma barra e o nome da classe...
    O namespace foi informado na classe filha da pasta Cliente.
    */

    var_dump($nameClass);
    
    echo "Essas duas linhas mostram como autoload chama as classes. Primeiro o namespace Cliente\Cadastro e como Cadastro de namespace herda de Cadastro pai, ele chama também a Classe principal. var_dump chamdo no arquivo config.php; neste caso, gera autoload gera dois arquivos diferentes Cliente\Cadastro.php e Cadastro.php";

    $dirClass = "class";
    echo "<br>";
    echo "<br>";
    //variável fileName que faz referêncoa além do nome do arquivo às suas pastas.
    $fileName = $dirClass . DIRECTORY_SEPARATOR . "$nameClass" . ".php";
    //DIRECTORY_SEPARATOR, obtem a barra de separação de diretórios, / ou \.

    if (file_exists($fileName)){
    /*file_exists retorna true ou false, porém, no if não é necessário comparar usando === ture.*/
    require_once($fileName);
    }
});
?>
