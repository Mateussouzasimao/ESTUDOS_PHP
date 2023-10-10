<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="codigo_09.php" method="post">
   
        <label> Digite o valor do produto</label><br>
        <input type="text" name="txtValor" id="txtValor"><br>

        <label> Digite o a forma de pagamento: <br>1 - À vista em dinheiro ou cheque, recebe 10% de desconto <br> 
                                                   2 - À vista no cartão de crédito, recebe 15% de desconto <br>
                                                   3 - Em duas vezes, preço normal de etiqueta sem juros<br> 
                                                   4 - Em três vezes, preço normal de etiqueta mais juros de 10%</label><br>
        <input type="text" name="txtPagamento" id="txtPagamento"><br>

        <input type="submit" name="btbVerifica" id="btnVerifica" value="verifca">
</body>
</html>