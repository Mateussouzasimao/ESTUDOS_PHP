<?php

$valor = $_POST['txtValor'];
$cliente = $_POST['txtCliente'];

switch($cliente){
    case 1:
        echo "O valor final do seu produto é de R$ " . number_format($valor, 2, ',', '.');
        break;
    case 2:
        $descontofun = $valor * 0.90;
        echo "Você funcionário, acaba de ganhar um desconto de 10%, com isso
        o valor final do seu produto é de R$ " . number_format($descontofun, 2, ',', '.');
        break;
    case 3:
        $descontovip = $valor * 0.95;
        echo "Você nosso cliente VIP, acaba de ganhar um desconto de 5%, com isso
        o valor final do seu produto é de R$ " . number_format($descontovip, 2, ',', '.');
        break;
    default:    
        echo "Cliente não existente";}
?>