<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Clientes</title>
</head>
<body>
    <h1>CRUD de Clientes</h1>
    <br>
    <a href="cadastro.php"> Adicionar Clientes</a><br>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php
        include('conn.php');
        $stmt = $pdo->query('SELECT * FROM tbCliente');
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>{$row['codCliente']}</td>";
            echo "<td>{$row['nomeCliente']}</td>";
            echo "<td>{$row['telCliente']}</td>";
            echo "<td>
                    <a href='editar.php?id={$row['codCliente']}'>Editar</a>
                    <a href='excluir.php?id={$row['codCliente']}'>Excluirr</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>    
</body>
</html>