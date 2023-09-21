<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Bem vindo a Lanchonte dos Dev´s</h2>

        <form action="lanchonete.php" method="post">
   

            <table border="0">
                <thead>
                    <tr>
                        <th colspan="3">
                            <h3> Cardapio </h3>
                        </th>
                    </tr>
                    <tr>
                        <th>Produto</th>
                        <th>Código</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cachorro Quente</td>
                        <td>100</td>
                        <td>1.20</td>
                    </tr>
                    <tr>
                        <td>Bauru Simples</td>
                        <td>101</td>
                        <td>1.30</td>
                    </tr>
                    <tr>
                        <td>Bauru com Ovo</td>
                        <td>102</td>
                        <td>1.50</td>
                    </tr>
                    <tr>
                        <td>Hamburguer</td>
                        <td>103</td>
                        <td>1.20</td>
                    </tr>
                    <tr>
                        <td>Cheeseburguer</td>
                        <td>104</td>
                        <td>1.70</td>
                    </tr>                   
                    <tr>
                        <td>Suco</td>
                        <td>105</td>
                        <td>2.20</td>
                    </tr>                    
                    <tr>
                        <td>Refrigerante</td>
                        <td>106</td>
                        <td>1.00</td>
                    </tr>
                </tbody>
            </table><br><br>
            
        <label> Digite o código do produto</label><br>
        <input type="text" name="txtProduto" id="txtProduto"><br>

        <label> Digite a quantidade</label><br>
        <input type="text" name="txtQtd" id="txtQtd"><br>

        <input type="submit" name="btbVerifica" id="btnVerifica" value="verifca">
</body>
</html>