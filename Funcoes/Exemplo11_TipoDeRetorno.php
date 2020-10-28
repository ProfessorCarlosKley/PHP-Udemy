<?php
function soma(int ...$valores): string 
//A função, após somar, retorna string. Na verdade faz um casting.
{
    //uma função com n parâmetros do tipo int (um array).
    return array_sum($valores);
    //função especial para somar o array de parâmetro
}

echo soma(10, 25, 25, 30, 40);
echo ("<br>");
var_dump(soma(10, 25, 25, 30, 40));
