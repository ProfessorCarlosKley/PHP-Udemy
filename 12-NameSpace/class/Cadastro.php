<?php
//Nome do arquivo tem mesmo nome da classe e é case sensitive.

class Cadastro{
//Atributos comuns à todos os cadastros.
private $nome;
private $email;
private $senha;

# Programando funções get.--------------------------------------------------------------
public function getNome():string{ //funcção no padrão PHP7 com declaração de retorno.
    return $this -> nome;
    /*  - $this chama atributo $nome declarado acima.
        - É uma variável que recebe um valor de atributo no escopo da class. 
        - Em outras linguagens não precisa usar $, em javascript por exemplo
          utiliza-se apenas this.
        - O atributo não precisa ser referenciado com $. */  
}

public function getEmail():string{
    return $this -> email;
}

public function getSenha():string{
    return $this -> senha;
}
# fim das funções get.--------------------------------------------------------------

# Programando funções set.--------------------------------------------------------------
public function setNome($nome){
    $this -> nome = $nome;
    /*O atributo nome recebe parâmetro $nome que não tem nenhuma relação apesar de mesmo nome.*/
}
public function setEmail($email){
    $this -> email = $email;
}
public function setSenha($senha){
    $this -> senha = $senha;
}
# fim das funções set.--------------------------------------------------------------

public function __toString()
 
/**
 * __toString método mágico: O método __toString() permite que uma classe decida como se comportar quando convertida para uma string. Por exemplo, o que echo $obj; irá imprimir. Este método precisa retornar uma string, senão um erro nível E_RECOVERABLE_ERROR é gerado
 * 
 * Método para serialização de objeto, transformando em string.
 * Permite darmos um echo diretamente no objeto, sem a necessidade de funções gets.
 * Ao chamarmos o objeto direatmente com echo, mesmo não tendo métodos de leitura,
 * cairemos nesse (como se fosse um padrão).
 * Ref. também no arquivo Exemplo05-SerializacaoDeObjetos na pasta classes.
 */
{
        //gerando uma codificação json.
    return json_encode(array(
   //Quando usamos json_encode, ele tem que ser de um array. 
   "nome" => $this -> getNome(),
   //a chave nome do aray, recebe o retorno de getNome;
   "email" => $this -> getEmail(),
   "senha" => $this -> getSenha()
   // => para adicionar chaves no array, -> para acessar métodos da classe.
    ));
}

}//Fim da classe


?>