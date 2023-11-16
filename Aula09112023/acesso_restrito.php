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
        <title>Acesso</title>
    </head>
    <body>
        Acesso Restrito
    </body>
    </html>