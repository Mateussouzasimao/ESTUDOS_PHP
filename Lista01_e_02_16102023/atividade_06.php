<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="codigo_06.php" method="post">
   
            <table>
                <thead>
                    <tr>
                        <th colspan="2">
                            <h3> Classificação dos Produtos</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>Código</th>
                        <th>Classificação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Alimento não-perecivel</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alimento perecivel</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Vestuário</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Higiene pessoal</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Limpeza e utensílios doméstico</td>
                    </tr>                   
                </tbody>
            </table><br><br>
            
        <label> Digite o código</label><br>
        <input type="text" name="txtProduto" id="txtProduto"><br>

        <input type="submit" name="btbVerifica" id="btnVerifica" value="verifca">
</body>
</html>