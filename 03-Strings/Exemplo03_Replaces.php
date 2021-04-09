	<?php
$nome = "Carlos Klei";
$nome = str_replace("a", "ª", $nome);
$nome = str_replace("e", "3", $nome);
echo $nome;
/*
Replace:    1º argumento, o que queremos substituir;
            2º argumento, pelo que queremos substituir;
            3º argumento, onde (variável) que deve acontecer a mudança.
*/
