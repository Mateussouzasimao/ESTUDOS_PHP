<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nomeCliente = $_POST['nomeCliente'];
    $telCliente = $_POST['telCliente'];

    $stmt = $pdo->prepare('UPDATE tbCliente SET nomeCliente = ?, telCliente = ? WHERE codCliente = ?');
    $stmt->execute([$nomeCliente, $telCliente, $id]);

    header('Location: index.php');
}

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM tbCliente WHERE codCliente = ?');
$stmt->execute([$id]);
$cliente = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Editar Cliente</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $cliente['codCliente']; ?>">
        <label for="nomeCliente">Nome do Cliente:</label>
        <input type="text" name="nomeCliente" value="<?php echo $cliente['nomeCliente']; ?>" required><br>

        <label for="telCliente">Telefone do Cliente:</label>
        <input type="text" name="telCliente" value="<?php echo $cliente['telCliente']; ?>" required><br>

        <input type="submit" value="Editar">
    </form>
</body>
</html>