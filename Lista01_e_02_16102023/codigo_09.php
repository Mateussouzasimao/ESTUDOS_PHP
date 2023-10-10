<?php

$valor = $_POST['txtValor'];
$pagamento = $_POST['txtPagamento'];

switch($pagamento){
    case 1:
        $desconto1 = $valor * 0.90;
        echo "Você acaba de ganhar 10% de desconto, o valor final do seu produto é de R$ " . number_format($desconto1, 2, ',', '.');
        break;
    case 2:
        $desconto2 = $valor * 0.85;
        echo "Você acaba de ganhar 15% de desconto, o valor final do seu produto é de R$ " . number_format($desconto2, 2, ',', '.');
        break;
    case 3:
        echo "O valor final do seu produto é de R$ " . number_format($valor, 2, ',', '.');
        break;
    case 4:
        $juros = $valor * 1.10;
        echo "Seu produto terá juros acrescido no valor, então o valor final do seu produto é de R$ " . number_format($juros, 2, ',', '.');
        break;
    default:    
        echo "Forma de pagamento não existente";}
?>