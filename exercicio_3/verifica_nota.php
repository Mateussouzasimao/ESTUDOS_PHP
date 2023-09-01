<?php

    $nota1 = $_POST['txtJurado1'];
    $nota2 = $_POST['txtJurado2'];
    $nota3 = $_POST['txtJurado3'];
    $nota4 = $_POST['txtJurado4'];
    $nota5 = $_POST['txtJurado5'];

    $entrada = $_POST['txtPartida'];

    $final = (5 / ($nota1 + $nota2 + $nota3 + $nota4 + $nota5)) + $entrada;
        {
            echo $final;
        }
 
?>