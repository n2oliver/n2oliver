<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
);

header('Content-Type: application/json');
echo json_encode($products);
?>