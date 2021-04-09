<?php
# wihle mais indicado para percorrer registro num banco de dados... 
# Por exemplo, enquanto existir registro, faça. 
# Entretanto pode ser utilizada para tratar qualquer assunto.
# while não exige uma sequência como For, o loop acontece enquanto a condição for verdadeira.

$condicao = true;
$i = 0;
while ($condicao) {
    
    $i +=1;
    $numero = rand(1, 10);
    #números aleatórios entre 1 e 10;
    if ($numero === 3) {
        
        $condicao = false;
    }
    echo "Tentativa: " . $i . " = ".	$numero . "<br>";

}
