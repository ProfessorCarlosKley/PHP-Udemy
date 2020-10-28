<?php
//Função anônima diretamente na variável.
$fn = function($a){
    var_dump($a);
    //funções anônimas não tem return
};

$fn("Função Anônima");