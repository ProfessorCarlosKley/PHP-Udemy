<?php
function soma(int ...$valores)
{
    //uma função com n parâmetros do tipo int (um array).
    return array_sum($valores);
    //função especial para somar valores de um array.
}
function soma2(float ...$valores)
{
    //uma função com n parâmetros do tipo float (um array).
    return array_sum($valores);
    //função especial para somar o array de parâmetro
}
echo soma(2, 2, 2, 2, 10, 1.5, 1);
//resultado 20 e não 20.5, pois foi convertido (casting) para int.
echo "<br>";
echo soma2(2, 2, 2, 2, 10, 1.5, 1);
//Resultado 20.5, função float.
echo "<br>";
echo "<br>";
var_dump(soma(10, 25, 25, 30, 40));
echo "<br>";
var_dump(soma2(10, 25, 25, 30, 40));

/*
	-Novidades do php7:
		 * Podemos determinar o tipo de dados do parâmetro.
		 * Uso de três pontos para array de parâmetros.
		 * Declaração do tipo de retorno.	

		 * func_get_args difere do uso de ... uma vez que nesse segundo modo indicamos o tipo de dados do parâmetro, e, neste caso será feito um castin.
*/