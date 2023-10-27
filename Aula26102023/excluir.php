<?php
include('conn.php');

$id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM tbCliente WHERE codCliente = ?');
$stmt->execute([$id]);

header('location: index.php');
?>