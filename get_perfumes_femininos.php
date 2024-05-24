<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Ella Radiance Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/ella-radiance-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157502-800-auto.png", 
        "hightlight" => true
    ),
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>