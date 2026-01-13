<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>