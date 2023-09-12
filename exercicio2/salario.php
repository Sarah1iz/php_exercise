<?php
    $salariofixo = $_GET['salario'];
    $vendas = $_GET['vendas'];
    //se uma venda é salario fixo * 4 /100.

    $comissao = (($salariofixo * 4) / 100) * ($vendas);

    $salariofinal = $comissao + $salariofixo;

    echo "A comissão foi de $comissao e o salário final do funcionário foi de $salariofinal ";
