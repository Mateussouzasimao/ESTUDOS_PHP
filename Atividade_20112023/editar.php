<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nome = $_POST['nome'];
    $Telefone = $_POST['telefone'];
    $Celular = $_POST['celular'];
    $Endereco = $_POST['endereco'];
    $Email = $_POST['email'];

    $stmt = $pdo->prepare('UPDATE tbclientes SET telefone = ?, celular = ?, endereco = ?, email = ? WHERE nome = ?');
    $stmt->execute([$Telefone, $Celular, $Endereco, $Email, $Nome]);

    // Soltando popup de aviso
    echo '<script>alert("Cadastro alterado com sucesso!");</script>';

    // Redirecionando apos o popup
    echo '<script>window.location = "acesso_completo.php";</script>';
}

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM tbclientes WHERE nome = ?');
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
        <input type="hidden" name="nome" value="<?php echo $cliente['nome']; ?>">

        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>" required><br>

        <label>Celular:</label>
        <input type="text" name="celular" value="<?php echo $cliente['celular']; ?>" required><br>

        <label>Endereço:</label>
        <input type="text" name="endereco" value="<?php echo $cliente['endereco']; ?>" required><br>

        <label>E-mail:</label>
        <input type="text" name="email" value="<?php echo $cliente['email']; ?>" required><br>

        <input type="submit" value="Editar">
    </form>
</body>
</html>