<?php
$a = 10;

function trocaValor(&$a)
{
    $a += 50;
    //Não muda a variável $a ela continua sendo 10. Mas a função retorna 60.
    //O que acontece na função fica na função. Não afeta $a no escopo superior.
    return $a;
}
echo "Valor da variável antes da manipulação da função: " . $a;
echo "<br>";
echo "Valor da variável manipulada por trocaValor: " . trocaValor($a);
echo "<br>";
echo "Valor da variável agora foi alterado. Passamos referência para função e o valor da variável agora é: " . $a;
echo "<br>";
echo "Segunda chamada à função, alterará a variável de 60 para:" . trocaValor($a);
echo "<br>";
echo "Valor da variável após manipulada pela função: " . $a;
/*
Esse exemplo obedece o escopo da função, a variável $a declarada anteriormente às funções não é alterada pelo implemento da função, isso é na verdade uma passagem por valor. Na passagem por referência o valor de $a seria alterado mesmo que dentro da função, pois estaríamos passando a referência na memória e não seu valor.
- Essa ideia é diferente da ideia de variável global. A global é enxergada em todo o scopo do programa. Aqui o que fizemos foi através de uma função, passar o endereço da memória para a função e a função trabalhou nesse endereço diretamente.
*/