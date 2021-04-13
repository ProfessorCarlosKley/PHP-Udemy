<?php

$january = new DateTime('2020-10-01');
$february = new DateTime('2020-11-01');
$interval = $february->diff($january);
/*diff Retorna diferença entre datas. Neste exemplo retorna diferença entre 01/10/2020 a 01/11/2020*/

// %a will output the total number of days.
echo $interval->format('%a dias no total')."\n";
echo "<br>"; //Não funcionando \n

// While %d will only output the number of days not already covered by the
// month.
echo $interval->format('%m mês, %d dias');

echo "CONTANDO QUANTOS DIAS JÁ VIVI ATÉ HOJE 31/10/2020";
echo "<br>";
$inicial = new DateTime('1976-11-13');
$atual = new DateTime('2020-10-31');
$dias = $inicial->diff($atual);
echo "<br>"; //Não funcionando \n
echo $dias->format('%a dias nas costas')."\n";
echo "<br>"; //Não funcionando \n
echo $dias->format('%y anos nas costas')."\n";
echo "<br>"; //Não funcionando \n

?>