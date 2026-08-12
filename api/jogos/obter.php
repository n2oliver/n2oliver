<?php
include_once(__DIR__."/../load-env.php");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: " . getenv('REACT_APP_URL'));
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

echo json_encode(
    array(
        0 => (object) [
            'id' => 1,
            'url' => '/jogos/linha-amarela',
            'titulo' => 'Linha Amarela',
            'descricao' => 'Divirta-se eliminando os invasores, antes que eles desçam e eliminem a terra!<br>',
            'resumo' => 'Um território, uma linha, um herói: você.',
            'imagem' => '/img/invasao-alien.png'
        ],
        1 => (object) [
            'id' => 2,
            'url' => '/jogos/combo-memo',
            'titulo' => 'Combo-Memo',
            'descricao' => 'Um divertido jogo da memória com combinações!<br>',
            'resumo' => '',
            'imagem' => '/img/combo-memo.png'
        ],
        2 => (object) [
            'id' => 3,
            'url' => '/jogos/caca-palavras',
            'titulo' => 'Caça-Palavras',
            'descricao' => 'Um clássico caça-palavras para testar sua atenção e vocabulário.',
            'resumo' => '',
            'imagem' => '/img/jogos/a.jpg'
        ],
        3 => (object) [
            'id' => 4,
            'url' => '/jogos/palavras-cruzadas',
            'titulo' => 'Palavras Cruzadas',
            'descricao' => 'Desafie seu conhecimento com este quebra-cabeça de palavras.',
            'resumo' => '',
            'imagem' => '/img/jogos/flat-crosswords.png'
        ],
        4 => (object) [
            'id' => 5,
            'url' => '/jogos/caixa-de-letras',
            'titulo' => 'Caixa de Letras',
            'descricao' => 'Desafie seu conhecimento com este quebra-cabeça com letrinhas.',
            'resumo' => '',
            'imagem' => '/img/jogos/caixa-de-letras.png'
        ],
    )
);