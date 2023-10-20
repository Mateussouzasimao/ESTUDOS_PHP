<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro do Cliente</title>
</head>
<body>

    <form action="processaCadCliente.php" method="post">

        <label>Nome do Cliente</label><br>
        <input type="text" name="txtNome" id="txtNome"><br>

        <label>Telefone do Cliente</label><br>
        <input type="text" name="txTel" id="txtTel"><br>

        <label>Celular do Cliente</label><br>
        <input type="text" name="txtCel" id="txtCel"><br>

        <label>E-mail do Cliente</label><br>
        <input type="text" name="txtEmail" id="txtEmail"><br>

        <br>
        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar">
    </form>
    <br>
</body>
</html>
