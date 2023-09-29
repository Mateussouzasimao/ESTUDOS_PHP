<?php

$inicial = $_POST['txtNumInicial'];
$final = $_POST['txtNumFinal'];

$i = $inicial;

if($inicial>=$final)
    {
        echo"Você informou valores sem intervalo ou o inicial maior que o final";
    }
else
    {
        while($i <= $final){
        echo"$i<br>";
        $i++;
        }
    }
echo"Fim do laço";

?>