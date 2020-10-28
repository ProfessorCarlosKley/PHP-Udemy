<?php
$a = NULL;
$b = NULL;
$c = 10;
$c = NULL;
$e = 50;


echo $a ?? $b ?? $c ?? $d ?? $e;

//?? operador php 7. Verifica se a variável é NULL.
//Se for continua a comparação e só imporimir quando ela tem algum valor.
//Evita notificação de variável não ter sido definida.
//As nulas são ignoradas.
//Para no última variável com valor.
