<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Case - Copa do Mundo</title>
</head>
<body>
    <form action="" method="post">
        <select name="slCopa">
            <option selected disabled>Escolha um Ano de Copa do Mundo</option>
            <?php for($i=1930; $i <= date("Y"); $i+=4): ?>
                <?php if(($i == 1942)||($i == 1946)) continue; ?>
                    <option value="<?=$i?>"><?=$i?></option>
            <?php endfor; ?>
        </select>
        <input type="submit" value="Executar">
    </form>
            <?php
                    $array = [
                        1930 => "Uruguai",
                        1934 => "Itália",
                        1938 => "Itália",
                        1950 => "Uruguai",
                        1954 => "Alemanha",
                        1958 => "Brasil",
                        1962 => "Brasil",
                        1966 => "Inglaterra",
                        1970 => "Brasil",
                        1974 => "Alemanha",
                        1978 => "Argentina",
                        1982 => "Itália",
                        1986 => "Argentina",
                        1990 => "Alemanha",
                        1994 => "Brasil",
                        1998 => "França",
                        2002 => "Brasil",
                        2006 => "Itália",
                        2010 => "Espanha",
                        2014 => "Alemanha",
                        2018 => "França",
                        2022 => "Argentina"
                    ];

                    if(isset($_POST['slCopa'])) {
    
                        $op = $_POST['slCopa'];

                        if(!empty($op))
                            echo"O campeão do mundo foi o " . $array[$op];
                        else
                            echo "Escolha um ano";    
                    }

                    // echo "O campeão do mundo foi o " . $array[$op];
            ?>
    
</body>
</html>