<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Smartphone Xiaomi Redmi Note 13 Pro", 
        "affiliate_link" => "https://amzn.to/4dWzWAc",
        "image_url" => "/loja_virtual/img/smartphones/51pk5PzpzZL._AC_SX569_.jpg",
        "descricao" => "<p>O Redmi Note 13 Pro é um monstro da fotografia, com sua câmera principal de 200MP que captura detalhes incríveis. A tela CrystalRes AMOLED com 120Hz oferece cores vibrantes e fluidez, enquanto o carregamento turbo de 67W garante que você passe menos tempo na tomada. É o celular para quem não abre mão de performance e qualidade de imagem.</p>"
    ),
    array(
        "id" => 2, 
        "name" => "POCO C65 8GB+256GB NFC MediaTek Helio G85 Octa Core",
        "affiliate_link" => "https://amzn.to/450H4XX",
        "image_url" => "/loja_virtual/img/smartphones/514hAJCEjRL._AC_SX569_.jpg",
        "descricao" => "<p>O POCO C65 foi feito para quem ama jogos e vídeos. Sua tela de 6.74 polegadas com 90Hz de atualização garante uma experiência visual suave e imersiva. A bateria gigante de 5000mAh aguenta horas de uso intenso, e a câmera tripla de 50MP com IA captura ótimas fotos em qualquer situação. Um verdadeiro campeão de performance na sua faixa de preço.</p>"
    ),
    array(
        "id" => 3, 
        "name" => "Smartphone Xiaomi Poco X7 Pro 5G NFC Black (Preto) 12GB RAM 512GB ROM [2412DPC0AG]",
        "affiliate_link" => "https://amzn.to/42lD7gx",
        "image_url" => "/loja_virtual/img/smartphones/61Dfzukq7KL._AC_SX679_.jpg",
        "descricao" => "<p>Marca	XIAOMI<br>
                            Sistema operacional	Android 14<br>
                            Tamanho instalado da memória RAM	12 GB<br>
                            Modelo da CPU	1.2GHz Cortex A8 Processor<br>
                            Velocidade da CPU	3 GHz</p>"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>