<?php

    $peso = $_POST['txtPeso'];
    $altura = $_POST['txtAltura'];

    $imc = round(($peso / ($altura * $altura)), 1);

    if ($imc < 18.5)
        {
        echo"Seu IMC é $imc, e você está abaixo do peso normal";
        }
    else if (($imc >=18.5)&&($imc <=24.9))
        {
            echo"Seu IMC é $imc, e você está no peso normal";
        }
    else if (($imc >=25)&&($imc <=29.9))
        {
            echo"Seu IMC é $imc, e você está com excesso de peso";
        }
    else if (($imc >=30)&&($imc <=34.9))
        {
            echo"Seu IMC é $imc, e você está com obesidade classe I";
        }
    else if (($imc >=35)&&($imc <=39.9))
        {
            echo"Seu IMC é $imc, e você está com obesidade classe II";
        }
    else if ($imc >=40)
        {
            echo"Seu IMC é $imc, e voce está com obesidade classe III";
        }

?>