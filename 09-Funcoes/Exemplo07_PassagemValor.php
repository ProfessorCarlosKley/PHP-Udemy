<?php
$a = 10; //valor da variável inalterada.
function trocaValor($a){
    $a = 50;
    return $a;
}
function trocaValor2($a){
    $a += 50;
/*Não muda a variável $a ela continua tendo valor 10. Mas a função retorna 60. O que acontece na função fica na função. Não afeta $a no escopo superior.*/
    return $a;
}

echo "Valor inicial da variável: ". $a;
echo "<br>";
echo "Chamando trocaValor. Retorna ". trocaValor($a);
echo "<br>";
echo "Chamando trocaValor2 - Adiciona 50. Retorna: ". trocaValor2($a);
echo "<br>";
echo "Chamando a variável inicial. Retorna: " . $a;

echo "<br><br>O valor da variável permaneceu intalterada mesmo após manipulação das funções. Passagem por valor. Naõ usa o endereço da variáve.";

/*
Esse exemplo obedece o escopo da função, a variável $a declarada anteriormente às funções não é alterada pelo implemento da função, isso é na verdade uma passagem por valor. Na passagem por referência o valor de $a seria alterado mesmo que dentro da função, pois estaríamos passando a referência na memória e não seu valor.
*/