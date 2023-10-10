<?php

    $nascimento = $_POST['txtAno'];

    $idade = date('Y') - $nascimento;

    if(($idade<6)||($idade>20))
        {
            echo"Idade invalida. A idade mínima é 6";
        }
    else if($idade<=7)
        {
            echo"Sub 7";
        }
    else if($idade<=9)
        {
            echo"Sub 9";
        }
    else if ($idade<=11)
        {
            echo"Sub 11";
        }
    else if ($idade<=13)
        {
            echo"Sub 13";
        }
    else if ($idade<=15)
        {
            echo"Sub 15";
        }
    else if ($idade<=17)
        {
            echo"Sub 17";
        }
    else if ($idade<=20)
        {
            echo"Sub 20";
        }

?>