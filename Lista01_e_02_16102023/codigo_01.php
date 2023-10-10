<?php

    $valor1 = $_POST['txtValor1'];
    $valor2 = $_POST['txtValor2'];
    $valor3 = $_POST['txtValor3'];
    $valor4 = $_POST['txtValor4'];

    $somaAC = $valor1 + $valor3;
    $multiplicacaoBD = $valor2 * $valor4;

    if($somaAC > $multiplicacaoBD)
        {
            echo"O número A+C é maior que B*D";
        }
    else if($somaAC < $multiplicacaoBD)
        {
            echo"O número A+C é menor que B*D";
        }
    else
        {
            echo"O número A+C é igual a B*D";
        }

?>