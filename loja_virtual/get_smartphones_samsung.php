<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Samsung Galaxy M55", 
        "affiliate_link" => "https://amzn.to/4dWzWAc", 
        "image_url" => "\\loja_virtual\\img\\smartphones\\51hR9ad6OoL._AC_SX425_.jpg",
        "descricao" =>
            "&bull; 5G <br>
            &bull; Nightography <br>
            &bull; Apagador de objetos <br>
            &bull; 256 GB <br>
            &bull; 8GB de RAM <br>
            &bull; Azul Escuro <br>
            &bull; Câmera Tripla de até 50MP, Selfie de 50 MP; <br>
            &bull; Tela Super AMOLED FHD+ de 6.7\"  120Hz com Vision Booster; <br>
            &bull; Cadeado Galaxy; <br>
            &bull; Segurança adicional com Samsung Knox; <br>
            &bull; Bateria de longa duração e carregamento rápido de até 45W;"
    ),
    array(
        "id" => 2, 
        "name" => "Samsung Galaxy A14 4G , Preto , 64GB", 
        "affiliate_link" => "https://amzn.to/3wQrT7a", 
        "image_url" => "\\loja_virtual\\img\\smartphones\\61MDcMBr7AL._AC_SX569_.jpg",
        "descricao" =>
            "&bull; 64GB de Memória Interna(*) e 4GB RAM<br>
            &bull; Bateria de 5000mAh<br>
            &bull; Câmera Tripla Traseira de 50MP +5MP + 2MP Selfie de 13.0 MP<br>
            &bull; Tela Infinita de 6.6\"** 60Hz<br>
            &bull; Dual Chip, Dual Messenger"
    ),
    array(
        "id" => 3, 
        "name" => "Samsung, Smartphone Samsung Galaxy A05 128GB/4GB RAM, Tela 6,7\" Preto", 
        "affiliate_link" => "https://amzn.to/3VeuPnj", 
        "image_url" => "\\loja_virtual\\img\\smartphones\\51VEElKDH9L._AC_SX425_.jpg",
        "descricao" =>
            "&bull; Marca: Samsung<br>
            &bull; Sistema operacional: Android 13.0<br>
            &bull; Tamanho instalado da memória RAM: 4 GB<br>
            &bull; Contagem de slots do cartão SIM: Dual SIM<br>
            &bull; Tipo de conector: USB tipo C<br>"
    ),
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>