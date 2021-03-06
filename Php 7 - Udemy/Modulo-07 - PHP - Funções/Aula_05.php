<?php

    $OrdemHierarquia = array(
        array(
            'nome_cargo' => 'CEO',
            'subordinados' => array(
                // Inicio: Diretor Comercial
                array(
                    'nome_cargo' => 'Diretor Comercial',
                    'subordinados' => array(
                        // Inicio: Gerente de Vendas
                        array(
                            'nome_cargo' => 'Gerente de Vendas'
                        )
                    )
                    // Fim: Gerente de Vendas
                ),
                // Fim: Diretor Comercial
                // Inicio: Diretor Financeiro
                array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'subordinados' => array(
                            array(
                            'nome_cargo' => 'Gerente Contas a Pagar',
                            'subordinados' => array(
                                array(
                                'nome_cargo' => 'Supervisor de Pagamentos',
                                    'subordinados' => array(
                                        array(
                                            'nome_cargo' => 'Analista Financeiro'
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            'nome_cargo' => 'Supervisor de Suprimentos'
                        )
                    )

                    // Fim: Diretor Financeiro
                )
            )
        )
    );


    function exibe($Cargos) {
        $html = "<ul>";
        foreach($Cargos as $cargo) {
            $html .= "<li>";
            $html .= $cargo['nome_cargo'];

            if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
                $html .= exibe($cargo['subordinados']);
            }

            $html .= "</li>";
        }
        $html .= "</ul>";
        return $html;
    }


    echo exibe($OrdemHierarquia);

?>