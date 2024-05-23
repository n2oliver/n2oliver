<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Especialista em Bentô Cake", 
        "affiliate_link" => "https://go.hotmart.com/D93217684L?dp=1", 
        "image_url" => "img\\cursos\\bento2.png", 
        "hightlight" => true
    ),
    array(
        "id" => 2, 
        "name" => "Curso de Extensão de Cílios - Escola dos Cílios", 
        "affiliate_link" => "https://go.hotmart.com/P93202077I", 
        "image_url" => "img\\cursos\\alongamento-cilios.png", 
    ),
    array(
        "id" => 3, 
        "name" => "Curso de Informática Básica", 
        "affiliate_link" => "https://go.hotmart.com/B93118595S", 
        "image_url" => "img\\cursos\\InfoBasica.jpg", 
    ),
    array(
        "id" => 4, 
        "name" => "Cursos Online de Excel e Power BI", 
        "affiliate_link" => "https://go.hotmart.com/V93197043J?dp=1", 
        "image_url" => "img\\cursos\\Excel.jpg", 
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>