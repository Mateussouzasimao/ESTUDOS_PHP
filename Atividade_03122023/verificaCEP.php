<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h2>Cadastro do Cliente</h2>
    <?php
    include('conn.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cep = $_POST['CEP']; 

        $url = "https://viacep.com.br/ws/{$cep}/json/";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        if ($response) {
            $endereco = json_decode($response, true);

            if (isset($endereco['erro'])) {
                echo "CEP nao encontrado";
            } else {
                // Recupere os detalhes do endereço
                $cep = $endereco['cep'];
                $logradouro = $endereco['logradouro'];
                $bairro = $endereco['bairro'];
                $cidade = $endereco['localidade'];
                $estado = $endereco['uf'];

                // Insira os detalhes do endereço no banco de dados
                $nome = $_POST['nome'];
                $stmt = $pdo->prepare('INSERT INTO tbcep(nome, logradouro, bairro, localidade, estado, cep) VALUES (?, ?, ?, ?, ?, ?)');
                $stmt->execute([$nome, $logradouro, $bairro, $cidade, $estado, $cep]);

                // Exibindo popup de sucesso
                echo '<script>alert("Endereço encontrado e Cadastro bem-sucedido!");</script>';

                echo "Nome: " . $nome . "<br>";
                echo "Logradouro: " . $logradouro . "<br>";
                echo "Bairro: " . $bairro . "<br>";
                echo "Cidade: " . $cidade . "<br>";
                echo "Estado: " . $estado . "<br>";
                echo "CEP: " . $cep . "<br>";
            }
        } else {
            echo "Erro ao buscar informacoes do CEP";
        }
    }
    ?>
    <br>
    <a href="index.php">Adicionar</a>

</body>
</html>