<?php

$qtd = $_POST['txtQtd'];
$produto = $_POST['txtProduto'];

$array = array (
    100 => 1.20,
    101 => 1.30,
    102 => 1.50,
    103 => 1.20,
    104 => 1.70,
    105 => 2.20,
    106 => 1.00
);

if(isset($array[$produto]))
    {
        $valor_final = $qtd * $array[$produto];

        echo "Valor final: R$ " . number_format($valor_final, 2, ',', '.');
    }
?>