<?php

    $custo = $_POST['txtCusto'];

    $qtd = $_POST['txtQtd'];

    $preco = $_POST['txtPreco'];

    $final = $preco - ($qtd * $custo);

    if($final<0)
        {
            echo"Você teve prejuizo";
        }
    else if($final==0)
        {
            echo"Você não teve lucro e nem prejuizo";
        }
    else if($final>0)
        {
            echo"Você teve lucro";
        }

?>