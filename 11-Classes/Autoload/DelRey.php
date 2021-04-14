<?php
class DelRey extends Automovel{

    public function empurrar(){
        //Método específico da classe DelRey
        echo "Del Rey está sendo empurrado. Não aguentou aceleração. <br>";
    }

}
/*
	- O nome do arquivo deve ser o mesmo nome da classe. Isso para a função procurar o nome do arquivo através do nome da classe.
 	- Essa classe extende da classe automovel, portanto teremos ela num arquivo físico também com o mesmo nome. DelRey está estendendo de Automóvel. 
 	- O Autoload no Exemplo01 cuida em achar as classes mencionadas.
 */