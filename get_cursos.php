<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Especialista em Bentô Cake", 
        "affiliate_link" => "https://go.hotmart.com/D93217684L", 
        "image_url" => "img\\cursos\\bento2.png", 
        "hightlight" => true
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>