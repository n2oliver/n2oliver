<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Smartphone Moto G84 5G 16GB RAM Boost* 256GB Grafite", 
        "affiliate_link" => "https://amzn.to/3VlG8KQ", 
        "image_url" => "\\loja_virtual\\img\\smartphones\\51vjQLRYFzL._AC_SX522_.jpg",
        "descricao" =>
            "&bull; Design ultramoderno <br>
            &bull; Câmera de 50 MP Ultra Pixel + OIS <br>
            &bull; Tela pOLED cinematográfica de 6,5\" <br>
            &bull; Som espacial e Dolby Atmos <br>
            &bull; Desempenho 5G de outro nível"
    ),
    array(
        "id" => 2, 
        "name" => "Smartphone Motorola Moto G24 8GB RAM Boost* 128GB Grafite", 
        "affiliate_link" => "https://amzn.to/3x0BJ6n", 
        "image_url" => "\\loja_virtual\\img\\smartphones\\51PBH2nM83L._AC_SX522_.jpg",
        "descricao" =>
            "&bull; Beleza em alta definição <br>
            &bull; RAM Boost: faça tudo ao mesmo tempo com 4 GB + 4 GB de RAM <br>
            &bull; Fotos nítidas com Night Vision e Inteligência Artificial <br>
            &bull; Superbrilho na supertela de 6,6″ com 90 Hz <br>
            &bull; Experiência de shows com som Dolby Atmos"
    ),
    array(
        "id" => 3, 
        "name" => "Smartphone Motorola Moto E13 4G 32GB 2GB RAM Verde", 
        "affiliate_link" => "https://amzn.to/4by2uOB", 
        "image_url" => "\\loja_virtual\\img\\smartphones\\51Hbitl2OqL._AC_SX679_.jpg",
        "descricao" =>
            "&bull; Estiloso. Elegante. Especialmente fino. <br>
            &bull; Áudio multidimensional com Dolby Atmos* | Tela de 6,5\" HD+ <br>
            &bull; Processador Octa-core | Android 13 Go <br>
            &bull; Câmera traseira de 13 MP | Selfies de 5 MP | Inteligência Artificial <br>
            &bull; Superbateria de 5000 mAh"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>