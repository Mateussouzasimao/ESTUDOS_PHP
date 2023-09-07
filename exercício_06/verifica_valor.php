<?php

    $valor = $_POST["txtValor"];

    $valorcomjuros = $valor * 1.16;
    $valorparcela = $valorcomjuros / 10;

        {
            echo"O valor final do produto é R$$valorcomjuros, divido por 10 parcelas, cada uma sairá por R$$valorparcela";
        }

?>