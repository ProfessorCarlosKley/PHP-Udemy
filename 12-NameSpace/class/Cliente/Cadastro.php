<?php
//O nome do arquivo segundo boas práticas de programação, deverá conter mesmo nome da classe e iniciar com letra maiúscula.
namespace Cliente; //Cria um namespace, mesmo nome da pasta.
/* Informa ao php que esta classe peretence a um namespace. Neste caso, Cliente (a pasta);
   Nao basta somente criar a pasta e orgnizar as sublcasses, precisamos dizer que ela é um namespace.
*/

class Cadastro extends \Cadastro {
# \Cadastro, volta na raiz de namespace e referencia a classe cadastro pai.

public function rgistrarVenda(){
    echo "Venda registrada para o cliente: " .$this -> getNome();
//getNome está na casse Cadastro no nível mais superior, classe genérica. A classe mãe.
}
}//Fim da classe

?>