<?php

    $ladoum = $_POST["txtPrimeiro"];
    $ladodois = $_POST["txtSegundo"];
    $ladotres = $_POST["txtTerceiro"];

    if (($ladoum == $ladodois)&&($ladodois == $ladotres))
        {
            echo"É um triângulo Equilátero";
        }
    else if (($ladoum == $ladodois)||($ladoum == $ladotres)||($ladodois == $ladotres))
        {
            echo"É um triângulo Isósceles"; 
        }
    else
        {
            echo"É um triângulo Escaleno";
        }

?>