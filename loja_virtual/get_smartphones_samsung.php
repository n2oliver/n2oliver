<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Samsung Galaxy M55", 
        "affiliate_link" => "https://amzn.to/4dWzWAc", 
        "image_url" => "/loja_virtual/img/smartphones/51hR9ad6OoL._AC_SX425_.jpg",
        "descricao" => "<p>O Galaxy M55 é ideal para quem ama fotografia e redes sociais. Com a tecnologia Nightography e uma câmera de 50MP, suas fotos noturnas ficam incríveis. A tela Super AMOLED+ de 6.7 polegadas e 120Hz oferece uma experiência visual fluida, perfeita para jogos e vídeos, enquanto a bateria de longa duração garante que você não fique na mão.</p>"
    ),
    array(
        "id" => 2, 
        "name" => "Samsung Galaxy A14 4G , Preto , 64GB", 
        "affiliate_link" => "https://amzn.to/3wQrT7a", 
        "image_url" => "/loja_virtual/img/smartphones/61MDcMBr7AL._AC_SX569_.jpg",
        "descricao" => "<p>Procurando um smartphone confiável para o dia a dia? O Galaxy A14 oferece um ótimo equilíbrio entre desempenho e custo. Sua bateria de 5000mAh dura o dia todo, a câmera tripla de 50MP captura fotos nítidas e a tela grande de 6.6 polegadas é excelente para navegar e assistir a vídeos. Uma escolha inteligente e econômica.</p>"
    ),
    array(
        "id" => 3, 
        "name" => "Samsung, Smartphone Samsung Galaxy A05 128GB/4GB RAM, Tela 6,7\" Preto", 
        "affiliate_link" => "https://amzn.to/3VeuPnj", 
        "image_url" => "/loja_virtual/img/smartphones/51VEElKDH9L._AC_SX425_.jpg",
        "descricao" => "<p>O Galaxy A05 é a porta de entrada para o universo Samsung, oferecendo um generoso espaço de 128GB e uma tela imersiva de 6,7 polegadas. É o aparelho perfeito para quem precisa de um dispositivo para tarefas essenciais, como redes sociais e comunicação, sem abrir mão de uma tela grande e bom armazenamento.</p>"
    ),
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>