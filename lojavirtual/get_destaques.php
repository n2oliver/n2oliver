<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(    
    array(
        "id" => 2, 
        "name" => "Lucro No Instagram", 
        "affiliate_link" => "https://go.hotmart.com/F93196255C?dp=1", 
        "image_url" => "/lojavirtual/img/livros/INSTAGRAM2.jpg",
        "descricao" => "<p>Este guia prático vai além das dicas superficiais e ensina estratégias concretas para transformar seu perfil do Instagram em uma fonte de renda consistente. Ideal para criadores de conteúdo e empreendedores que desejam monetizar sua audiência de forma eficaz.</p>",
    ),
    array(
        "id" => 3, 
        "name" => "Especialista Em Bentô Cake", 
        "affiliate_link" => "https://go.hotmart.com/D93217684L", 
        "image_url" => "/lojavirtual/img/cursos/bento2.png", 
        "descricao" => "<p>Aprenda o passo a passo para criar os famosos Bentô Cakes, a tendência que conquistou a confeitaria. Este curso ensina desde a massa perfeita até as decorações criativas que encantam os clientes, sendo ideal para quem quer começar um negócio ou inovar no cardápio.</p>",
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>