<?php
/*A função date não é sensível ao setlocale, para configuração regional,(idioma e fuso horário) por isso, mesmo configurndo aqui a data obedece o padrão americano. Resultado em inglês.

A função date, obedece configurações do servidor.*/
date_default_timezone_set('UTC');
echo "<br>";

// Exibe alguma coisa como: Monday
echo date("l");
echo "<br>";

// Exibe alguma coisa como: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
echo "<br>";

// Exibe: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";

/* utiliza as constantes do parâmetro de formato */
// Exibe alguma coisa como: Mon, 15 Aug 2005 15:12:46 UTC
echo date(DATE_RFC822);
echo "<br>";

// Exibe alguma coisa como: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";
