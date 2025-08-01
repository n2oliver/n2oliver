<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Apple iPhone 14 Plus (128 GB) – azul", 
        "affiliate_link" => "https://amzn.to/3wRZBJv", 
        "image_url" => "/loja_virtual/img/smartphones/51ZdfCx9TJL._AC_SX679_.jpg",
        "descricao" =>
            "<p>O Apple iPhone 14 Plus é a escolha ideal para quem busca uma tela grande e uma experiência visual imersiva, graças ao seu display Super Retina XDR de 6,7 polegadas. Ele não é apenas sobre o tamanho; seu sistema de câmera foi aprimorado para capturar fotos incríveis, mesmo em condições de pouca luz.</p>
            <p>Para os criadores de conteúdo, o Modo Cinema agora em 4K Dolby Vision transforma seus vídeos em produções cinematográficas, enquanto o Modo Ação garante gravações estáveis mesmo em movimento. Além disso, a Apple reforça a segurança com a Detecção de Acidente, um recurso vital que pode contatar a emergência por você.</p>"
    ),
    array(
        "id" => 2, 
        "name" => "Apple iPhone 14 (128 GB) – Estelar", 
        "affiliate_link" => "https://amzn.to/3UR8if6", 
        "image_url" => "/loja_virtual/img/smartphones/41t1UNX2zHL._AC_SX679_.jpg",
        "descricao" => "<p>Para quem prefere um formato mais compacto sem abrir mão da performance, o iPhone 14 é a escolha perfeita. Com sua tela de 6,1 polegadas, ele oferece a mesma tecnologia de câmera avançada e os modos Cinema e Ação do seu irmão maior, garantindo fotos e vídeos de qualidade profissional. É o equilíbrio ideal entre portabilidade e poder.</p>"
    ),
    array(
        "id" => 3, 
        "name" => "Apple iPhone 13 (128 GB) - Meia-noite", 
        "affiliate_link" => "https://amzn.to/3UXGfKY", 
        "image_url" => "/loja_virtual/img/smartphones/41rfDU6FGqL.__AC_SY445_SX342_QL70_ML2_.jpg",
        "descricao" => "<p>O iPhone 13 continua sendo uma opção fantástica com um excelente custo-benefício. Equipado com o poderoso chip A15 Bionic, ele garante um desempenho ultrarrápido para todas as tarefas. Seu sistema de câmera dupla é extremamente versátil, e o modo Cinema adiciona um toque profissional aos seus vídeos, tornando-o ideal para quem busca uma experiência premium e confiável.</p>"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>