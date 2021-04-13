<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
/*Padrões de linguagens: No linux é escrito de uma maneira, no windows de outra, além disso, temos o padrão utf-8. Sendo assim, melhor indicar as três formas de linguagens que irá funcionar independentemente de plataforma.

LC_ALL quer dizer: mude toda configuração de localização para português.
*/
$linha = str_repeat("=", 100);

echo "<h1>TRABALHANDO COM strftime - CONFIGURAÇÃO DE HORA</h1>";
echo $linha;
echo "<br>";
echo "CONFIGURAÇÃO DE HORA";
echo "<br>";
echo $linha;
echo "<br>";

echo "Hora com dois dígitos, formato 24h. (%H) >> " . strftime("%H");
echo "<br>";
echo "Representação, com dois dígitos, da hora no formato 24 horas, com um espaço precedendo aqueles com somente um dígito. (%k) >> " . strftime("%k");
echo "<br>";
echo "Representação, com dois dígitos, da hora no formato 12 horas. (%I) >> " . strftime("%I");
echo "<br>";
echo "Representação, com dois dígitos, da hora no formato 12 horas, com um espaço precedendo aqueles com somente um dígito. (%l) >> " . strftime("%l");
echo "<br>";
echo "Representação, com dois dígitos, do minuto. (%M) >> " . strftime("%M");
echo "<br>";
echo "'AM' ou 'PM' maiúsculo baseado na hora informada. (%p) >> " . strftime("%p");
echo "<br>";
echo "'AM' ou 'PM' maiúsculo baseado na hora informada. (%P) >> " . strftime("%P");
echo "<br>";
echo "O mesmo que %I:%M:%S %p (%r) >> " . strftime("%r");
echo "<br>";
echo "O mesmo que %H:%M (%R) >> " . strftime("%R");
echo "<br>";
echo "Representação, com dois dígitos, do segundo (%S) >> " . strftime("%S");
echo "<br>";
echo "O mesmo que %H:%M:%S (%T) >> " . strftime("%T");
echo "<br>";
echo "Representação escolhida baseada no idioma, sem a data (%x) >> " . strftime("%X");
echo "<br>";
echo "O deslocamento do fuso horário. Não implementado como descrito no Windows. Veja mais informações a seguir. (%z) - Exemplo: -0500 para hora à leste dos EUA >> " . strftime("%z");
echo "<br>";
echo "A abreviação do fuso horário. Não implementado como descrito no Windows. Veja mais informações a seguir. (%Z) - Exemplo: EST para Eastern Time >> " . strftime("%Z");
echo "<br>";

echo "<br>";
echo $linha;
echo "<br>";
echo "CARIMBOS DE DATA E HORA";
echo "<br>";
echo $linha;
echo "<br>";

echo "Carimbo escolhido de data e hora baseado no idioma. (%c) >> " . strftime("%c");
echo "<br>";
echo "O mesmo que %m/%d/%y. (%d) >> " . strftime("%D");
echo "<br>";
echo "O mesmo que %Y-%m-%d (geralmente utilizado em carimbos de data em bancos de dados). (%d) >> " . strftime("%F");
echo "<br>";
echo "Timestamp Unix Epoch Time (o mesmo que a função time() function). (%s) >> " . strftime("%s");
echo "<br>";

echo "<br>";
echo $linha;
echo "<br>";
echo "MISCELÂNEA";
echo "<br>";
echo $linha;
echo "<br>";
echo "Nova Linha. (%n)";
echo "<br>";
echo "Tab. >> (%t)";
echo "<br>";
echo "Caracter de %. >> (%%)";
echo "<br>";

echo $linha;
echo "<br>";
echo "EXEMPLO";
echo "<br>";
echo $linha;
echo "<br>";

echo "Araci-BA, " . strftime("%A") .  strftime("%d") . " de " . strftime("%B") . " de " . strftime("%Y");
echo ". Estamos na " . strftime("%U") . " semana.";
echo " São exatamente, " . strftime("%H") . " horas " . strftime("%P")
    . ", " . strftime("%M") . " minutos e " . strftime("%S") . " segundos."
    . " Fuso horário: " . strftime("%Z");
