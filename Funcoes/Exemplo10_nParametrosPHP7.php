<?php
function soma(int ...$valores)
{
    //uma função com n parâmetros do tipo int (um array).
    return array_sum($valores);
    //função especial para somar o array de parâmetro
}
function soma2(float ...$valores)
{
    //uma função com n parâmetros do tipo float (um array).
    return array_sum($valores);
    //função especial para somar o array de parâmetro
}
echo soma(2, 2, 2, 2, 10, 1.5, 1);
//resultado 20 e não 20.5, pois foi convertido para int.
echo "<br>";
echo soma2(2, 2, 2, 2, 10, 1.5, 1);
//Resultado 20.5, função float.
echo "<br>";
var_dump(soma(10, 25, 25, 30, 40));
