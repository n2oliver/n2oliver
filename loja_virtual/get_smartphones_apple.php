<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Apple iPhone 14 Plus (128 GB) – azul", 
        "affiliate_link" => "https://amzn.to/3wRZBJv", 
        "image_url" => "/loja_virtual/img/smartphones/51ZdfCx9TJL._AC_SX679_.jpg",
        "descricao" =>
            "&bull; Tela Super Retina XDR de 6,7 polegadas <br>
            &bull; Sistema de câmera avançado para fotos melhores em qualquer luz <br>
            &bull; Modo Cinema, agora em 4K Dolby Vision até 30 qps <br>
            &bull; Modo Ação para vídeos em movimento com mais estabilidade <br>
            &bull; Tecnologia de segurança: Detecção de Acidente3, que liga para a emergência se você não puder"
    ),
    array(
        "id" => 2, 
        "name" => "Apple iPhone 14 (128 GB) – Estelar", 
        "affiliate_link" => "https://amzn.to/3UR8if6", 
        "image_url" => "/loja_virtual/img/smartphones/41t1UNX2zHL._AC_SX679_.jpg",
        "descricao" =>
            "&bull; Tela Super Retina XDR de 6,1 polegadas <br>
            &bull; Sistema de câmera avançado para fotos melhores em qualquer luz <br>
            &bull; Modo Cinema, agora em 4K Dolby Vision até 30 qps <br>
            &bull; Modo Ação para vídeos em movimento com mais estabilidade <br>
            &bull; Tecnologia de segurança — Detecção de Acidente, que liga para a emergência se você não puder"
    ),
    array(
        "id" => 3, 
        "name" => "Apple iPhone 13 (128 GB) - Meia-noite", 
        "affiliate_link" => "https://amzn.to/3UXGfKY", 
        "image_url" => "/loja_virtual/img/smartphones/41rfDU6FGqL.__AC_SY445_SX342_QL70_ML2_.jpg",
        "descricao" =>
            "&bull; Tela Super Retina XDR de 6,1 polegadas <br>
            &bull; O modo cinematic adiciona profundidade de campo rasa e muda o foco automaticamente em seus vídeos <br>
            &bull; Sistema avançado de câmera dupla com câmeras Wide e Ultra Wide de 12MP; Estilos fotográficos, Smart HDR 4, modo noturno, gravação 4K Dolby Vision HDR <br>
            &bull; Câmera frontal TrueDepth de 12 MP com modo noturno, gravação 4K Dolby Vision HDR <br>
            &bull; Chip biônico A15 para desempenho ultrarrápido"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>