<?php

function ola()
{
    echo "Olá Mundo! <br>";}

function ola2()
{
    return "Olá Mundo2!<br>";
	//retorna uma string.
	}

ola();
ola();
echo "<br>";
echo "Retorno da função no echo: " . ola2();
echo "<br>";

$frase = ola2();

echo "Retorno da função numa variável: " . $frase;
echo "Número de caracteres na string retornada : " . strlen($frase);

#strlen considera também os caracteres do <br>, incluisive a os da tag <>.

/*	Note a diferença entre chmar ola e ola2;
    - Ola2 retorna uma string logo tem que ser exibida com echo.
    - Ola já usa echo para exibir uma string, logo basta chamar.

    - Uma função que não retorna valor na verade é uma subrotina e não uma função em seu conceito.
*/
