<?php
session_start();
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: " . getenv('REACT_APP_URL'));
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}
if (!isset($_SESSION['usuario_id']) && !isset($_SESSION['partida_rapida'])) {
    // Redireciona para a página de login
    http_response_code(200);
    echo json_encode(array("code"=>401, "message"=> "Acesso não permitido"));
    exit;
}
echo json_encode(array("usuario_id"=>$_SESSION['usuario_id'], "partida_rapida"=>$_SESSION['partida_rapida']));
session_abort();