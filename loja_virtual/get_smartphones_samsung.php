<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Samsung Galaxy M55", 
        "affiliate_link" => "https://amzn.to/4dWzWAc", 
        "image_url" => "/loja_virtual/img/smartphones/51hR9ad6OoL._AC_SX425_.jpg",
        "descricao" => "<p>O Galaxy M55 é ideal para quem ama fotografia e redes sociais. Com a tecnologia Nightography e uma câmera de 50MP, suas fotos noturnas ficam incríveis. A tela Super AMOLED+ de 6.7 polegadas e 120Hz oferece uma experiência visual fluida, perfeita para jogos e vídeos, enquanto a bateria de longa duração garante que você não fique na mão.</p>"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>