<?php 
//Exemplos das aulas de autoload na pasta htdocs/11-Classes e 12-NameSpace

spl_autoload_register(function($class_name){
	//class é a pasta que contém as classes.
	$file_name = "class".DIRECTORY_SEPARATOR.$class_name. ".php"; 
	
	if(file_exists($file_name)){
		require_once($file_name);
	}
});

/*
 - spl_autoload encontra o nome da classe como no autload normal, Exemplo01  e utiliza como parâmetro da função.spl - resolve o problema de autoload que só procura na pasta atual, a não ser que ouviesse outros tratamentos mais complexos para isso, spl_autoload torna mais prático.
 - Standard PHP Library ou SPL é uma coleção de classes e interfaces que servem para resolver problemas padrões no mundo PHP, seu principal objetivo é prover interfaces que permita os desenvolvedores fazer um uso completo das vantagens da programação orientado a objetos.
*/
?>