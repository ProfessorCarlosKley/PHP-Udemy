<?php
echo "Página chamada às: " . date('H:i:s');
echo "<br>";
function test($callbach)
//A variável $callbach (parâmetro) receberá uma função anônima e poderá ser chamada como uma função.
{
    //Muito utilizada no JavaScript;

    //Processo lento:
    $callbach();
    /*Interessante para um processo muito logo por exemplo, "carregamento de um vídeo", rodando em segundo plano, no final do processo dá um retorno.*/
}
// Pausa o script por três segundos usando o usleep:
// sleep(3);
// Pausa o script por cinco segundos usando o usleep:
usleep(5000000);
echo "Esperou 5 segundos até carregar essa página. - ";
test(function () {
    echo "Processo interrompido, muito lento.<br><br>";
    //funções anônimas não tem return e nem um nome.
});
echo "Página interrompida às: " . date('H:i:s');
