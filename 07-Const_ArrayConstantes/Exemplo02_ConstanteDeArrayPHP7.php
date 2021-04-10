<?php
# Uma constante que armazena um arry. PHP 7.
define("BANCO_DE_DADOS", [
'127.0.0.1',
'root',
'password',
'bancoTeste'], true);

// true - esse parâmetro torna a constante case insensitive.

print_r(BANCO_DE_DADOS);
echo "<br>";
echo "<br>";
echo "Endereço: ";
print_r(BANCO_DE_DADOS[0]);
echo "<br>";
echo "Usuário: ";
print_r(BANCO_DE_DADOS[1]);
echo "<br>";
echo "Senha: ";
print_r(banco_de_dados[2]);
echo "<br>";
echo "Banco de dados: ";
print_r(banco_de_dados[3]);

# Lembrando que print_r é usado para exibir os elementos de um array.
# banco_de_dados não é reconhecido mas o uso de true permite a compilação.
# Constantes com letras minúsculas não é uma boa prática.
