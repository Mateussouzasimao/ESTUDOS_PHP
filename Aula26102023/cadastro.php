<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeCliente = $_POST['nomeCliente'];
    $telCliente = $_POST['telCliente'];

    $stmt = $pdo->prepare('INSERT INTO tbCliente(nomeCliente, telCliente) VALUES (?, ?)');
    $stmt->execute([$nomeCliente, $telCliente]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
</head>
<body>
    <h2>Adicionar Cliente</h2>
    <form method="POST">
        <label for="nomeCliente">Nome do Cliente:</label>
        <input type="text" name="nomeCliente" required><br>

        <label for="telCliente">Telefone do Cliente:</label>
        <input type="text" name="telCliente" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>