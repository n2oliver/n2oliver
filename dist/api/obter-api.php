<?php
include_once __DIR__.'/load-env.php';
header('Content-Type: application/json');

echo json_encode([
    'API_URL' => getenv('VITE_API_URL'),
]);