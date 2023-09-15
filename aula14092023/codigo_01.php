<?php

    $valor1 = $_POST['txtValor1'];
    $valor2 = $_POST['txtValor2'];
    $valor3 = $_POST['txtValor3'];
    $valor4 = $_POST['txtValor4'];

    $somaAB = $valor1 + $valor2;
    $multiplicacaoCD = $valor3 * $valor4;

    if($somaAB > $multiplicacaoCD)
        {
            echo"O número A+B é maior que C*D";
        }
    else if($somaAB < $multiplicacaoCD)
        {
            echo"O número A+B é menor que C*D";
        }
    else
        {
            echo"O número A+B é igual a C*D";
        }

?>