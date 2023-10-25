<?php

    for($i=1938; $i <= date("Y"); $i+=4)
    {
        if(($i == 1942)||($i == 1946))
        {
            continue;
        }
            echo "$i <br>";
    }
?>