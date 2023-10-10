<?php

    $salario = $_POST['txtSalario'];

    $calculo1 = $salario*1.50;
    $calculo2 = $salario*1.30;

    if($salario <= 300)
        {
            echo"O seu salário após o reajuste é de R$$calculo1";
        }
    else
        {
            echo"O seu salário após o reajuste é de R$$calculo2";
        }

?>