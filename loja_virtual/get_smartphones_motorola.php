<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Smartphone Moto G84 5G 16GB RAM Boost* 256GB Grafite", 
        "affiliate_link" => "https://amzn.to/3VlG8KQ",
        "image_url" => "/loja_virtual/img/smartphones/51vjQLRYFzL._AC_SX522_.jpg",
        "descricao" => "<p>O Moto G84 5G é um show de tecnologia. Sua câmera de 50 MP com estabilização óptica (OIS) garante fotos e vídeos sem tremores, enquanto a tela pOLED de 6,5 polegadas e o som Dolby Atmos criam uma verdadeira experiência de cinema no seu bolso. Ideal para quem consome muito conteúdo e busca desempenho 5G.</p>"
    ),
    array(
        "id" => 2, 
        "name" => "Smartphone Motorola Moto G24 8GB RAM Boost* 128GB Grafite", 
        "affiliate_link" => "https://amzn.to/3x0BJ6n",
        "image_url" => "/loja_virtual/img/smartphones/51PBH2nM83L._AC_SX522_.jpg",
        "descricao" => "<p>Para quem precisa de agilidade, o Moto G24 é a escolha certa. Com a função RAM Boost, ele otimiza a memória para que você possa usar vários apps ao mesmo tempo sem travamentos. A tela de 90Hz oferece navegação suave, e o modo Night Vision garante fotos claras mesmo com pouca luz.</p>"
    ),
    array(
        "id" => 3, 
        "name" => "Smartphone Motorola Moto E13 4G 32GB 2GB RAM Verde", 
        "affiliate_link" => "https://amzn.to/4by2uOB",
        "image_url" => "/loja_virtual/img/smartphones/51Hbitl2OqL._AC_SX679_.jpg",
        "descricao" => "<p>O Moto E13 combina design elegante com funcionalidades essenciais. É um aparelho perfeito para quem busca um smartphone para o básico, como ligações, mensagens e redes sociais. A superbateria de 5000 mAh garante autonomia para o dia todo, e seu design fino o torna confortável de usar.</p>"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>