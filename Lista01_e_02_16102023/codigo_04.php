<?php

    $nota = $_POST['txtNotas'];
    $falta = $_POST['txtFaltas'];

    if(($nota<0)||($nota>10))
        {
            echo"Nota invalida, a nota deve ser entre 0 e 10";
        }
    else if(($nota>=9)&&($nota<=10)&&($falta<=20))
        {
            echo"O conceito do Aluno foi A";
        }
    else if(($nota>=9)&&($nota<=10)&&($falta>20))
        {
            echo"O conceito do Aluno foi B";
        }
    else if(($nota>=7.5)&&($nota<=8.9)&&($falta<=20))
        {
            echo"O conceito do Aluno foi B";
        }
    else if(($nota>=7.5)&&($nota<=8.9)&&($falta>20))
        {
            echo"O conceito do Aluno foi C";
        }
    else if(($nota>=5)&&($nota<=7.4)&&($falta<=20))
        {
            echo"O conceito do Aluno foi C";
        }
    else if(($nota>=5)&&($nota<=7.4)&&($falta>20))
        {
            echo"O conceito do Aluno foi D";
        }
    else if(($nota>=4)&&($nota<=4.9)&&($falta<=20))
        {
            echo"O conceito do Aluno foi D";
        }
    else if(($nota>=4)&&($nota<=4.9)&&($falta>20))
        {
            echo"O conceito do Aluno foi E";
        }
    else
        {
            echo"O conceito do Aluno foi E";
        }
?>