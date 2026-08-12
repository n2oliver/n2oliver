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
            'url' => '/aplicativos',
            'titulo' => 'Aplicativos',
            'descricao' => 'Conheça meu protifólio de aplicativos',
            'resumo' => '',
            'imagem' => '/img/n2.jpg'
        ]
        
    )
);