<?php
function soma(int ...$valores): string 
//uma função com n parâmetros do tipo int (um array).
//A função, após somar, retorna string. Na verdade faz um casting.
{
    return array_sum($valores);
    //função especial para somar o array de parâmetro
}

echo soma(10, 25, 25, 30, 40);
echo ("<br>");
var_dump(soma(10, 25, 25, 30, 40));

/*
	-Novidades do php7:
		 * Podemos determinar o tipo de dados do parâmetro.
		 * Uso de três pontos para array de parâmetros.
		 * Declaração do tipo de retorno.	

		 * func_get_args difere do uso de ... uma vez que nesse segundo modo indicamos o tipo de dados do parâmetro, e, neste caso será feito um castin.
*/

	