<?php
function test($callbach)
{
    //Muito utilizada no JavaScript;

    //Processo lento:
    $callbach();
    /*Interessante para um processo muito logo por exemplo, "carregamento de um vídeo, por exemplo", rodando em segundo plano, no final do processo dá um retorno.*/
}

test(function () {
    echo "Terminou";
    //funções anônimas não tem return
});
