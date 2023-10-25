<?php

    for($i=1896; $i <= date("Y"); $i+=4)
    {
        if(($i == 1916)||($i == 1940)||($i == 1944))
        {
            continue;
        }
            echo "$i <br>";

        if ($i == 1904)
        {
            echo "1906 <br>"; 
        }    
    }
?>
