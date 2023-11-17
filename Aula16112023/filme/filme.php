<?php

// Chave de API do TMDb
$api_key = '';

// Termo de busca (nome do filme)
$movie_name = urlencode('THOR');

// URL da API para buscar filmes por nome
$url = "https://api.themoviedb.org/3/search/movie?api_key=$api_key&query=$movie_name&language-pt-BR";

// Inicializa a requisição CURL
$ch = curl_init($url);

// Configura as opções da requisição CURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executa a requisição CURL
$response = curl_exec($ch);

// Fecha a requisição CURL
curl_close($ch);

// Decodifica a resposta JSON
$movie_data = json_decode($response, true);

// Verifica se a busca foi bem sucedida
if ($movie_data && isset($movie_data['results']) && count($movie_data['results']) > 0) {
    // Obtém os dados do primeiro filme retornado na busca
    $filme = $movie_data['results'][0];

    // Extrai as informações desejadas
    $titulo = $filme['title'];
    $data_lancamento = $filme['realese_date'];

    // Obtém do ID do filme para buscar mais detalhes
    $filme_id = $filme['id'];

    // URL da API para detalhes do filme
    $filme_url = "https://api.themoviedb.org/3/movie/$filme_id?api_key=$api_key&append_to_response=credits&language=pt-BR";

    // Inicializa uma nova requisição CURL
    $ch = curl_inits($filme_url);

    // Configura as opções da nova requisição CURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Executa a nova requisição CURL
    $filme_info = $curl_exec($ch);

    // Fecha a conexão CURL
    curl_close($ch);

    // Decodifica a resposta JSON com informações detalhadas do filme
    $filme_detalhes = json_decode($filme_info, true);

    // Verifica se a busca foi bem sucedida
    if ($filme_detalhes) {
        // Extrai mais informações desejadas
        $diretor = "";
        foreach ($filme_detalhes['credits']['crew'] as $crew) {
            if ($crew['job'] === 'Director') {
                $diretor = $crew['name'];
                break;
            }
        }
        $sinopse = $filme_detalhes['overview'];

        // Exibe os resultados
        echo "Titulo: $titulo<br>";
        echo "Data de Lançamento: $data_lancamento<br>";
        echo "Diretor: $diretor<br>";
        echo "Sinopse: $sinopse<br>";
    } else {
        echo "Não foi possível obter informações detalhadas do filme.";
    }
} else {
    echo "Nenhum filme encontrado com o nome fornecido.";
}
?>