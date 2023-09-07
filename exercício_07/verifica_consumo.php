<?php

    $distancia = $_POST["txtDistancia"];
    $consumo = $_POST["txtConsumo"];

    $consumo_medio = round(($distancia / $consumo), 2);

        {
            echo"O consumo médio de combustivel para distância percorrida é de $consumo_medio l/km";
        }

?>