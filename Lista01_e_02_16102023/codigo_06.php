<?php

$valor = $_POST['txtValor'];
$formapgto = $_POST['txtFormaPGTO'];

if($formapgto == 1)
    {
        $desconto = $valor * 0.90;
        echo "Pagamento à vista, você ganha um desconto de 10%, o valor final do seu produto é de $desconto";
    }
elseif($formapgto == 2)
    {
        echo "Pagamento à prazo não possui desconto, o valor final do seu produto é de $valor";
    }
?>