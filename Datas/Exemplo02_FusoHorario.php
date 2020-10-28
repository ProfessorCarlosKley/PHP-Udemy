<?php
/*A função date obedece à linguagem e regionais do servidor...  */
echo "DATA ATUAL <BR>";
echo "Data e Hora: " . date('d-m-Y :: H:i:s');
echo "<br>";
echo "<br>";

echo "FUSO HORÁRIO <BR>";
echo "<br>";
echo "Data e Hora: " . date('e'). "	:: 'e' - Identificador do fuso horário (adicionado no PHP 5.1.0)";
echo "<br>";
echo "Horário de Verão: " . date('I'). " :: 'I' - Se a data está ou não no horário de verão. 1 = Sim e 0 = Não.";
echo "<br>";
echo "Greenwish: " . date('O'). " :: 'O' - Deslocamento ao Horário de Greenwish (GMT) em horas.";
echo "<br>";
echo "Greenwish: " . date('P'). " :: 'P' - Deslocamento ao Horário de Greenwish (GMT) com dois pontos entre horas e minutos (adicionado no PHP 5.1.3).";
echo "<br>";
echo "Abreviação do Fuso Horário: " . date('T'). " :: 'T' - Exemplos: EST, MDT ...";
echo "<br>";
echo "Deslocamento em segundos: " . date('Z'). " :: 'Z' - Deslocamento, em segundos, do fuso horário. O deslocamento para fusos horários a oeste de UTC sempre será negativa, e para aqueles à leste de UTC sempre será positiva.. - (-43200 até 50400).";
echo "<br>";
echo "<br>";
echo "DATA / HORA COMPLETA <BR>";
echo "Data e Hora Completa: " . date('c'). " :: 'c' - Data ISO 8601 (adicionado no PHP 5).";
echo "<br>";
echo "Data Formatada: " . date('r'). " :: 'r' - » RFC 2822 formatted date. - Exemplo: Thu, 21 Dec 2000 16:01:07 +0200";
echo "<br>";
echo "Segundos desde Unix Epoch: " . date('u'). " :: 'u' - Segundos desde Unix Epoch (January 1 1970 00:00:00 GMT)";
echo "<br>";