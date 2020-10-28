<?php
$pessoa = array(
    'nome' => 'CARLOS KLEI',
    'idade' =>  20
);
foreach($pessoa as $value){
    echo $value. '<br>';
}
//esse foreach apenas ler, mas digamos que queiramos alterar o array.

echo "<br>";
print_r($pessoa);
echo "<br>";
echo "<br>";
foreach($pessoa as &$value){
    if (gettype($value)==='integer')
        $value += 20;
        //gettype verifica o tipo de dados da varável.
        //se for do tipo inteiro, adiciona mais 20;
    echo $value. '<br>';
}
echo "<br>";
print_r($pessoa);