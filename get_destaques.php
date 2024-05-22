<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Ella Radiance Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/ella-radiance-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157502-800-auto.png", 
    ),
    
    array(
        "id" => 2, 
        "name" => "Lucro no Instagram", 
        "affiliate_link" => "https://go.hotmart.com/F93196255C", 
        "image_url" => "img\\livros\\INSTAGRAM2.jpg",
    ),
    array(
        "id" => 3, 
        "name" => "Especialista em Bentô Cake", 
        "affiliate_link" => "https://go.hotmart.com/D93217684L", 
        "image_url" => "img\\cursos\\bento2.png", 
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>