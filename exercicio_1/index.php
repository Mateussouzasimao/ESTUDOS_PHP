<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="verifica_lucro.php" method="post">
            
        <label>Digite o preço para produzir o produto</label><br>
        <input type="text" name="txtCusto" id="txtCusto"><br>

        <label>Digite o preco de venda desse mesmo produto</label><br>
        <input type="text" name="txtPreco" id="txtPreco"><br>

        <label>Digite a quantidade vendida desse produto</label><br>
        <input type="text" name="txtQtd" id="txtQtd"><br>
        
        <input type="submit" name="btnVerifica" id="btnVerifica" value="verifica">
</body>
    
</body>
</html>