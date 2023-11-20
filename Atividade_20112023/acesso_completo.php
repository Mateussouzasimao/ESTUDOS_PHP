<?php

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['login'])) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta para o login
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas de Clientes</title>
</head>
<body>
    <h1>Agenda</h1>
    <br>
    <a href="cadastro.php">Adicionar Clientes</a><br><a href="index.php">Sair</a><br>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Endereço</th>
            <th>E-mail</th>
        </tr>
        <?php
        include('conn.php');
        $stmt = $pdo->query('SELECT * FROM tbclientes');
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>{$row['nome']}</td>";
            echo "<td>{$row['telefone']}</td>";
            echo "<td>{$row['celular']}</td>";
            echo "<td>{$row['endereco']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>
                    <a href='editar.php?id={$row['nome']}'>Editar</a>
                    <a href='excluir.php?id={$row['nome']}'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>    
</body>
</html>