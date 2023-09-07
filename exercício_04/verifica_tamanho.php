<?php

    $area = $_POST['txtTamanho'];
    $tinta = 18;
    $preco = 80;

    $litros = $area / 3;
    $latas = ceil($litros / $tinta);

    $custofinal = $latas * $preco;


    if($latas <= 1)
        {
            echo"Você precisará de $latas lata de tinta e gastará $custofinal";
        }
    else if($latas > 1)
        {
            echo"Você precisará de $latas latas de tinta e gastará $custofinal";
        }

?>