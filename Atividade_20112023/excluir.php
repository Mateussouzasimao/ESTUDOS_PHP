<?php
include('conn.php');

$id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM tbclientes WHERE nome = ?');
$stmt->execute([$id]);

// Soltando popup de aviso
echo '<script>alert("Cadastro excluido com sucesso!");</script>';

// Redirecionando apos o popup
echo '<script>window.location = "acesso_completo.php";</script>';
?>