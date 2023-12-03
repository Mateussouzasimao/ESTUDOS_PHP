<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h2>Cadastro do Filme</h2>
<?php
include('conn.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Chave da API do TMDb
    $api_key = '24cbe70f2a16ad41a11099a8bbc0f43e';

    //Nome do filme
    $movie_name = $_POST['filme'];

    //URL
    $url = "https://api.themoviedb.org/3/search/movie?api_key=$api_key&query=$movie_name&language=pt-BR";

    //Inicializa a requisição cURL
    $ch = curl_init($url);

    //Configura as opções da requisição cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Executa a requisição cURL
    $response = curl_exec($ch);

    //Fecha a conexão cURL
    curl_close($ch);

    //Decodifica a resposta JSON
    $movie_data = json_decode($response, true);

    //Verifica se a busca foi bem-sucedida
    if ($movie_data && isset($movie_data['results']) && count($movie_data['results']) > 0) {
        //Obtem os dados do primeiro filme retornado na busca
        $filme = $movie_data['results'][0];

        //Extrai as informações desejadas
        $titulo = $filme['title'];
        $data_lancamento = $filme['release_date'];

        //Obtem o Id do filme para buscar mais detalhes
        $filme_id = $filme['id'];

        //URL da API para detalhes do filme
        $filme_url = "https://api.themoviedb.org/3/movie/$filme_id?api_key=$api_key&append_to_response=credits&language=pt-BR";

        //Inicializa uma nova requisição cURL
        $ch = curl_init($filme_url);

        //Configura as opções da nova requisição cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //Executa a nova requisiçõ cURL
        $filme_info = curl_exec($ch);

        //Fecha a conexão cURL
        curl_close($ch);

        //Decodifica a resposta JSON com informações detalhadas do filme
        $filme_detalhes = json_decode($filme_info, true);

        //Verifica se a busca foi bem-sucedida
        if ($filme_detalhes) {
            //Extrai mais informações desejadas
            $diretor = "";
            foreach ($filme_detalhes['credits']['crew'] as $crew) {
                if ($crew['job'] === 'Director') {
                    $diretor = $crew['name'];
                    break;
                }
            }
            $sinopse = $filme_detalhes['overview'];

             // Insira os detalhes do endereço no banco de dados
             $stmt = $pdo->prepare('INSERT INTO tbfilmes(titulo, data_lancamento, diretor, sinopse) VALUES (?, ?, ?, ?)');
             $stmt->execute([$titulo, $data_lancamento, $diretor, $sinopse]);

             // Exibindo popup de sucesso
             echo '<script>alert("Filme encontrado e Cadastro bem-sucedido!");</script>';

            //Exibe os resultados
            echo "Título: $titulo<br>";
            echo "Data de Lançamento $data_lancamento<br>";
            echo "Diretor: $diretor<br>";
            echo "Sinopse: $sinopse<br>";
        } else {
            echo "Não foi possível obter informações detalhadas do filme";
        }
    } else {
        echo "Nenhum filme encontrado com o nome fornecido";
    }
}
?>
<br>
<a href="index.php">Adicionar</a>

</body>
</html>