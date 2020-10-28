<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
/*Padrões de linguagens: No linux é escrito de uma maneira, no windows de outra, além disso, temos o padrão utf-8. Sendo assim, melhor indicar as três formas de linguagens que irá funcionar independentemente de plataforma.

LC_ALL quer dizer: mude toda configuração de localização para português.
*/
$linha = str_repeat("=", 100);

echo $linha;
echo "<br>";
echo "EXEMPLOS";
echo "<br>";
echo $linha;
echo "<br>";

echo ucwords( strftime("%A %B"));
//ucwords coloca primeiras letras de cada palavra em maiúsclas.
echo "<br>";
echo "<br>";



echo "Araci-BA, " . strftime("%A") .  strftime("%d") . " de " . strftime("%B") . " de " . strftime("%Y");
echo ". Estamos na " . strftime("%U") . " semana.";
echo " São exatamente, " . strftime("%H") . " horas " . strftime("%P")
    . ", " . strftime("%M") . " minutos e " . strftime("%S") . " segundos."
    . " Fuso horário: " . strftime("%Z");
