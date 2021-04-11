<?php
$pessoa = array(
    'nome' => 'CARLOS KLEI',
    'idade' =>  20
);
echo "LEITURA DO ARRAY COM foreach. <BR><BR> ";
foreach($pessoa as $index => $value){
    echo $index. ': ';
    echo $value. ' ';

}
//Esse foreach apenas ler, mas digamos que queiramos alterar o array.
echo "<BR>";
echo "<br>";
echo "LEITURA DO ARRAY COM print_r. <BR><BR> ";
print_r($pessoa);
echo "<br>";
echo "<br>";
echo "===============================================================<br>";
echo "<BR>LEITURA DO ARRAY COM foreach USANDO REFERêNCIA. <BR><BR> ";
echo "Alterando o valor da chave.<BR> ";
foreach($pessoa as &$value){
    if (gettype($value)==='integer')
        $value += 20;
        //gettype verifica o tipo de dados da varável.
        //se for do tipo inteiro, adiciona mais 20;
    	//Neste caso ignora a primeira chave que é nome.
    echo $value. '. ';
}
echo "<br>";
echo "<br>";
print_r($pessoa);

