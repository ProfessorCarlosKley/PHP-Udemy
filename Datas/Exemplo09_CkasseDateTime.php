<?php
//Uso de classe é interessante para solicitar um retorno de função do tipo da classe.
//Toda vez que formos manipular datas, é preferível o uso da calsse.
//O uso da classe é interessante uma vez que armazena qualquer modificação feita.

$linha = str_repeat("=", 100);

echo $linha;
echo "<br>";
echo "CLASSE datetime()";
echo "<br>";
echo $linha;
echo "<br>";

$dt = new DateTime(); //Criando instância da classe. $dt agora é objeto da classe.
echo "Acessando método da classe no php usa-se ->.";
echo "<br>";
echo $dt ->  format("d/m/Y - h:i:s"); //format utiliza mesmos parâmetros da funlã date.
echo "<br>";
echo "Prazo de entrega de 15 dias a partir da data atual.";
echo "<br>";

$periodo = new DateInterval("P15D");
//P período D em dias. Ver manual DateInterval manual php na net.
//Essa classe serve como como parâmetro de intervalo de DateTime
$dt -> add($periodo);
//O parâmetro de add é uma outra clsse que armazenta um intervalo de período.
echo $dt ->  format("d/m/Y - h:i:s"); //format utiliza mesmos parâmetros da funlã date.

echo "<br>";
$interval = new DateInterval('P2Y4DT6H8M');
echo $interval->format('%d days');
echo "<br>";
$interval = new DateInterval('P32D');
echo $interval->format('%d days');

