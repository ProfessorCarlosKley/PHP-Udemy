<?php
echo date("d/m/Y H:i:s");
echo "<br>";
echo "A quantidade de segundos desde janeiro de 1970 até agora.";
/*O php baseia se no timestamp para trabalhar com datas, portanto, 01/01/1970 é o marco zero para o php, querendo trabalhar co datas inferiores, basta considerar os valores negativos. */
echo time();
echo "<br>";

echo "Data fixada com timestamp: " . date("d/m/Y H:i:s", 1610545869);
// 1610545869 - Esse valor foi pego no momento da criação desse arquivo na linha echo time();
echo "<br>No momento desse estudo, essa quantidade de segundos corresondia a: ";
$anos = 1610545869 / 3600 / 24 / 365;
echo $anos . " anos. ";

/* timestamp: O parâmetro opcional timestamp é um integer Unix timestamp cujo padrão é a hora local se timestamp não for informado. Em outras palavras, o padrão é o valor da função time(). */
echo "<br>";
$linha = str_repeat("*", 100);
echo $linha;
echo "<br>";
echo "GERANDO TIMESTAMP DE UMA DATA";
echo "<br>";
echo "timestamp da data 11/09/2001. É o número de segundos de 01/01/1970 até essa data: ";
echo strtotime('2001/09/11');
echo "<br>";
echo "Agora, podemos usar esse timestamp na função date.";
//Converte uma string para time, ou seja, GERA UM TIMESTAMP;
echo "<br>";
echo "Data fixada com timestamp: " . date("d/m/Y H:i:s", 1000177200);
echo "<br>";
echo $linha;
echo "<br>";
echo "GERANDO TIMESTAMP DE MINHA DATA DE NASCIMENTO";
echo "<br>";
$meuTimeStamp = strtotime('1976/11/13');
echo "timestamp até meu nascimento " . $meuTimeStamp;
echo "<br>";
echo "Meu nascimento fixado com timestamp: " . date("l, d/m/Y H:i:s", $meuTimeStamp);
echo "<br>";

echo $linha;
echo "<br>";
echo "strtotime aceita expressão, por exemplo, convertendo now (agora): ";
$ts = strtotime('now');
echo $ts;
echo "<br>";

echo "Agora + 10 dias: ";
$ts2 = strtotime('+10 day');
echo date("l, d/m/Y H:i:s", $ts2);
echo "<br>";

echo "Agora + 1 semana + 2 dias: ";
$ts3 = strtotime('+1 week +2 day +5 hours');
echo date("l, d/m/Y H:i:s", $ts3);
echo "<br>";
