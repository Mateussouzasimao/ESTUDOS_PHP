<?php

date_default_timezone_set("America/Sao_Paulo");

$num = $_POST['txtNum'];

for($i=$num; $i <= $num + 50; $i++)
{
    echo"$i [" . date("d/m/Y H:i:s") . "]<br>";
}
?>