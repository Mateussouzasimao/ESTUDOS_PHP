<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação de Usuário</title>
</head>
<body>
    <h1>Consulta CEP</h1>
    <form method="post" action="verificaCEP.php">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Digite aqui o seu CEP:</label>
        <input type="text" name="CEP" required>
        <br>
        <input type="submit" value="Consultar">
    </form>
</body>
</html>