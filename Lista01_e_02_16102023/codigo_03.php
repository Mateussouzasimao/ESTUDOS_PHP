<?php

    $nota1 = $_POST['txtNota1'];
    $nota2 = $_POST['txtNota2'];

    $media = (($nota1 + $nota2)/2);

    if(($nota1 < 0 )||($nota1 > 10)||($nota2 < 0 )||($nota2 > 10))
        {
            echo"Nota invalida, as notas devem ser entre 0 e 10";
        }
    else
        {
            echo"A média do aluno foi $media";
        }

?>