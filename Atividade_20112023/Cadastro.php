<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nome = $_POST['nome'];
    $Telefone = $_POST['telefone'];
    $Celular = $_POST['celular'];
    $Endereco = $_POST['endereco'];
    $Email = $_POST['email'];

    $stmt = $pdo->prepare('INSERT INTO tbclientes(nome, telefone, celular, endereco, email) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$Nome, $Telefone, $Celular, $Endereco, $Email]);

    // Exibindo popup de sucesso
    echo '<script>alert("Cadastro bem-sucedido!");</script>';

    // Redirecionando apos o popup
    echo '<script>window.location = "acesso_completo.php";</script>';
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
    <style>
        form {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h2>Adicionar Usuário</h2>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Telefone:</label>
        <input type="text" name="telefone" required>
        <br>
        <label>Celular:</label>
        <input type="text" name="celular" required>
        <br>
        <label>Endereço:</label>
        <input type="text" name="endereco" required>
        <br>
        <label>E-mail:</label>
        <input type="text" name="email" required>
        <br>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>