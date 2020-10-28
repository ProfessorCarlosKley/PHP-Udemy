<?php
$hierarquia = array(
    //Array principal - Mais fora da hieraquia, conterá demais arrays.
    array(
        'nome_cargo' => 'Chefe Executivo',
        'subordinados' => array(
            //Início do array Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                //Subordinados do Diretor Comercial
                'subordinados' => array(
                    //Inicio Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas',
                    ) //Fim Gerente de vendas
                ) //Fim Subordinados Diretor Comercial.
            ), //Fim Diretor Comercial
            //Inicio Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                //Subordinados Diretor Finanaceiro
                'subordinados' => array(
                    //Inicio de Gerente de contas a pagar. 
                    array(
                        'nome_cargo' => 'Gerente de Contas à Pagar',
                        //Início subordinados de Gerente de Contas à pagar.
                        'subordinados' => array(
                            //Início Supervisor de Pagamento
                            array(
                                'nome_cargo' => 'Supervisor de Pagamento'
                            ) //Término Supervisor de Pagamento
                        ) //Fim subordinados do Gerente de contas à pagar.
                    ), //Fim gerente de contas a pagar.
                    //Inicio Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        //Subordinados Gerente de Compras
                        'subordinados' => array(
                            //Início Supervisor de Compras
                            array(
                                'nome_cargo' => 'Supervisor de Compras',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Funcionário'
                #só precisamos trabalhar até o segundo nível do array, os mais inferiores
                #são identificados automaticamente.
                                    )
                                )
                            ) //Fim Supervisor de Compras
                        ) //Fim subordinados Gerente de Compras
                    ) //Término Gerente de Compras
                ) //Fim subordinados do Diretor Financeiro
            ) //Fim Diretor Financeiro - Último elemento sem vírgula
        ) //Fim array subordinados do Chefe Executivo.
    ) //Fim do array, chefe executivo.
); //Fim do array principal, maior.

function exibe($cargos)
{
    $html = '<ul>';
    foreach ($cargos as $cargo) {
        $html .= '<li>';
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados'])>0) {
            #isset verifica se a chava subordinados exite, foi definida.
            #Count, conta o numero de arrays, neste caso o número de ubordinados.
            #só precisamos trabalhar até o segundo nível do array, os mais inferiores
            #são identificados automaticamente.
            $html .= exibe($cargo['subordinados']);
            //função recursiva, chamando ela mesma. 
        }
        $html .= '</li>';
    }
    $html .= '</ul>';
    return $html;
}
echo exibe($hierarquia);
