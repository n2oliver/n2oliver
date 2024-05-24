<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Lattitude Brave Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-brave-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\159465-800-auto.png"
    ),
    array(
        "id" => 3, 
        "name" => "Empire Icon Deo Parfum 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-icon-deo-parfum-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\159533-800-auto.png"
    ),
    array(
        "id" => 4, 
        "name" => "Empire Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158800-1600-auto.png"
    ),
    array(
        "id" => 5, 
        "name" => "Empire Legacy Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-legacy-deo-colonia/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158942-800-auto.png"
    ),
    array(
        "id" => 6, 
        "name" => "Empire Sport Deo Colônia 100ml Sport", 
        "affiliate_link" => "https://www.hinode.com.br/empire-sport-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158801-800-auto.png"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>