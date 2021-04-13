<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
/*Padrões de linguagens: No linux é escrito de uma maneira, no windows de outra, além disso, temos o padrão utf-8. Sendo assim, melhor indicar as três formas de linguagens que irá funcionar independentemente de plataforma.

LC_ALL quer dizer: mude toda configuração de localização para português.

*/
$linha = str_repeat("=", 100);

echo "<h1>TRABALHANDO COM strftime - CONFIGURAÇÃO DE DATAS</h1>";
echo $linha;
echo "<br>";
echo "CONFIGURAÇÃO DE DIA";
echo "<br>";
echo $linha;
echo "<br>";
echo "Dia abreviado (%a) >> " . strftime("%a");
echo "<br>";
echo "Dia completo (%A) >> " . strftime("%A");
echo "<br>";
echo "Dia com zero à esquerda (%d) >> " . strftime("%d");
echo "<br>";
echo "Dias transcorridos no ano com 3 dígitos (%j) >> " . strftime("%j");
echo "<br>";
echo "Representação numérica do dia >> (%u) 1 = segunda >> " . strftime("%u");
echo "<br>";
echo "Representação numérica do dia >> (%w) 0 = domingo >> " . strftime("%w");
echo "<br>";


echo $linha;
echo "<br>";
echo "CONFIGURAÇÃO DE SEMANA";
echo "<br>";
echo $linha;
echo "<br>";

echo "Número da semana de um dado ano, iniciado com o primeiro Domingo sendo a primeira semana. (%U) - 13 (como a 13ª semana completa do ano) >> " . strftime("%U");
echo "<br>";
echo "<br>";

echo "	Número da semana, compatível com a ISO-8601:1988 de um dado ano, iniciada com a primeira semana do ano com pelo menos 4 finais de semana, sendo a Segunda-feira como o início da semana.. (%V) - 01 até 53 (onde 53 é responsável por uma sobreposição) >> " . strftime("%V");
echo "<br>";

echo "<br>";

echo "Representação numérica da semana do ano, começando pela primeira Segunda-feira como primeira semana. (%W) - 46 (como a 46ª semana do do ano iniciando na Segunda-feira) >> " . strftime("%W");
echo "<br>";

echo $linha;
echo "<br>";
echo "CONFIGURAÇÃO DE MÊS";
echo "<br>";
echo $linha;
echo "<br>";

echo "Nomne mês abreviado. (%b) >> " . strftime("%b");
echo "<br>";
echo "Nomne mês completo. (%B) >> " . strftime("%B");
echo "<br>";
echo "Nomne mês abreviado, baseado no idioma (sinônimo de %b). (%h) >> " . strftime("%h");
echo "<br>";
echo "Nomne mês numérico. (%m) >> " . strftime("%m");
echo "<br>";

echo $linha;
echo "<br>";
echo "CONFIGURAÇÃO DE ANO";
echo "<br>";
echo $linha;
echo "<br>";

echo "Ano 2 dígitos. (%C) >> " . strftime("%C");
echo "<br>";
echo "Representação do ano, com dois dígitos, seguindo o padrão ISO-8601:1988 (veja %V). (%g) >> " . strftime("%g");
echo "<br>";
echo "Versão de 4 dígitos de %g. (%G) >> " . strftime("%G");
echo "<br>";
echo "Repreesntação com 2 dígitos.(%y) >> " . strftime("%y");
echo "<br>";
echo "Repreesntação com 4 dígitos.(%Y) >> " . strftime("%Y");
echo "<br>";

echo $linha;
echo "<br>";
echo "EXEMPLO";
echo "<br>";
echo $linha;
echo "<br>";
echo "<br>";
echo "Araci-BA, ". strftime("%A") .  strftime("%d") . " de " . strftime("%B") . " de " . strftime("%Y") ;

echo ". Estamos na " . strftime("%U") . "ª semana.";