<?php
require_once('Config.php');
echo "Local do arquivo de sessão: " . session_save_path();
# Obtém e/ou define o caminho para armazenamento da sessão atual
echo "<br>";


echo "<br>";
echo "Nome da Seção: " . session_name();
# Obtém e/ou define o nome da sessão atual
echo "<br>";
echo "Status da Seção: ";
echo "Status: " . session_status() . ": ";
# Retorna o status atual da sessão
var_dump(session_status());
switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas.";
        break;
    case PHP_SESSION_NONE:
        echo "As sessões estão habilitadas, mas nenhuma ativa.";
        break;
    case PHP_SESSION_ACTIVE:
        echo "As sessões estão habilitadas, e pelo menos uma ativa";
        break;
}
/*
session_status(), retorno:

_DISABLED = 0
_NONE = 1
_ACTIVE = 2

PHP_SESSION_DISABLED se as sessões estiverem desabilitadas.
PHP_SESSION_NONE se as sessões estiverem habilitadas, mas nenhuma existir.
PHP_SESSION_ACTIVE se as sessões estiverem habilitadas, e uma existir.

Ver documentação php.net. Documentação em português. Em características buscar sessões, lá temos toda documetação das funções de sessões.
*/
